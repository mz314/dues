<?php

namespace Dues\DuesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Dues\DuesBundle\Entity\Due;
use Dues\DuesBundle\Form\DueType;

/**
 * Due controller.
 *
 */
class DueController extends Controller
{

    /**
     * Lists all Due entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DuesBundle:Due')->findAll();

        return $this->render('DuesBundle:Due:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Due entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Due();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        $entity->setHolderId( $this->get('security.context')->getToken()->getUser()->getId());
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('due_show', array('id' => $entity->getId())));
        }

        return $this->render('DuesBundle:Due:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Due entity.
    *
    * @param Due $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Due $entity)
    {
        $form = $this->createForm(new DueType(), $entity, array(
            'action' => $this->generateUrl('due_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Due entity.
     *
     */
    public function newAction()
    {
        $entity = new Due();
        $form   = $this->createCreateForm($entity);

        return $this->render('DuesBundle:Due:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Due entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DuesBundle:Due')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Due entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DuesBundle:Due:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Due entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DuesBundle:Due')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Due entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DuesBundle:Due:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Due entity.
    *
    * @param Due $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Due $entity)
    {
        $form = $this->createForm(new DueType(), $entity, array(
            'action' => $this->generateUrl('due_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Due entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DuesBundle:Due')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Due entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('due_edit', array('id' => $id)));
        }

        return $this->render('DuesBundle:Due:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Due entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DuesBundle:Due')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Due entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('due'));
    }

    /**
     * Creates a form to delete a Due entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('due_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
