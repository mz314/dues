<?php

namespace Dues\DuesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Dues\DuesBundle\Entity\Debtor;
use Dues\DuesBundle\Form\DebtorType;

/**
 * Debtor controller.
 *
 */
class DebtorController extends Controller
{

    /**
     * Lists all Debtor entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DuesBundle:Debtor')->findAll();

        return $this->render('DuesBundle:Debtor:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Debtor entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Debtor();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('debtor_show', array('id' => $entity->getId())));
        }

        return $this->render('DuesBundle:Debtor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Debtor entity.
    *
    * @param Debtor $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Debtor $entity)
    {
        $form = $this->createForm(new DebtorType(), $entity, array(
            'action' => $this->generateUrl('debtor_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Debtor entity.
     *
     */
    public function newAction()
    {
        $entity = new Debtor();
        $form   = $this->createCreateForm($entity);

        return $this->render('DuesBundle:Debtor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Debtor entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DuesBundle:Debtor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Debtor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DuesBundle:Debtor:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Debtor entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DuesBundle:Debtor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Debtor entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DuesBundle:Debtor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Debtor entity.
    *
    * @param Debtor $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Debtor $entity)
    {
        $form = $this->createForm(new DebtorType(), $entity, array(
            'action' => $this->generateUrl('debtor_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Debtor entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DuesBundle:Debtor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Debtor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('debtor_edit', array('id' => $id)));
        }

        return $this->render('DuesBundle:Debtor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Debtor entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DuesBundle:Debtor')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Debtor entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('debtor'));
    }

    /**
     * Creates a form to delete a Debtor entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('debtor_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
