<?php

namespace CoralliumServerBundle\Controller;

use CoralliumServerBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;

use FOS\RestBundle\Controller\Annotations\RouteResource;

/**
 * User controller.
 *
 */

/**
 * @RouteResource("User", pluralize=false)
 */
class UserController extends FOSRestController
{
    /**
     * Lists all user entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('CoralliumServerBundle:User')->findAll();

        return $this->render('user/index.html.twig', array(
            'users' => $users,
        ));
    }

    public function registerUserAction(Request $request)
    {
        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.registration.form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $user = $userManager->createUser();
        $user->setEnabled(true);

        $event = new \FOS\UserBundle\Event\GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(\FOS\UserBundle\FOSUserEvents::REGISTRATION_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        $form = $formFactory->createForm();
        $form->setData($user);
        $form->handleRequest($request);

        if ( $form->isSubmitted() ) {
            if ($form->isValid()) {
                $event = new \FOS\UserBundle\Event\FormEvent($form, $request);

                $dispatcher->dispatch(\FOS\UserBundle\FOSUserEvents::REGISTRATION_SUCCESS, $event);

                $roles = $request->get('role_tmp');
                $roles = array_unique( $roles );

                $found = array_search( "ROLE_ADMIN", $roles );
                if ( $found )
                {
                    unset( $roles[$found] ); 
                }
                $user->setRoles( $roles );
                $userManager->updateUser($user);

                if (null === $response = $event->getResponse()) {
                    $url = $this->generateUrl('fos_user_registration_confirmed');
                    $response = new \Symfony\Component\HttpFoundation\RedirectResponse($url);
                }

                $dispatcher->dispatch(\FOS\UserBundle\FOSUserEvents::REGISTRATION_COMPLETED, new \FOS\UserBundle\Event\FilterUserResponseEvent($user, $request, $response));

                $data = array ("success" => $user->getUsername()." created");
                $view = $this->view($data, Response::HTTP_OK);
                $view->setFormat("json");

                return $this->handleView($view);
            }
            else
            {
                $data = array ( "error" => "registration error");
                $view = $this->view($data, Response::HTTP_OK);
                $view->setFormat("json");

                return $this->handleView($view);
            }
        }

        // $view = $this->view($form, Response::HTTP_BAD_REQUEST);
        // return $this->handleView($view);

        $data = array ( "error" => "form not submitted");
        $view = $this->view($data, Response::HTTP_BAD_REQUEST);
        $view->setFormat("json");

        return $this->handleView($view);
    }  // "register_user"           [POST] /registerUser
    /**
     * Creates a new user entity.
     *
     */
    public function newAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm('CoralliumServerBundle\Form\UserType', $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush($user);

            return $this->redirectToRoute('user_show', array('id' => $user->getId()));
        }

        return $this->render('user/new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a user entity.
     *
     */
    public function showAction(User $user)
    {
        $deleteForm = $this->createDeleteForm($user);

        return $this->render('user/show.html.twig', array(
            'user' => $user,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing user entity.
     *
     */
    public function editAction(Request $request, User $user)
    {
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('CoralliumServerBundle\Form\UserType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_edit', array('id' => $user->getId()));
        }

        return $this->render('user/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a user entity.
     *
     */
    public function deleteAction(Request $request, User $user)
    {
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush($user);
        }

        return $this->redirectToRoute('user_index');
    }

    /**
     * Creates a form to delete a user entity.
     *
     * @param User $user The user entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
