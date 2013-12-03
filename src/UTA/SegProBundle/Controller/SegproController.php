<?php

namespace UTA\SegProBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use UTA\SegProBundle\Entity\Segpro;
use UTA\SegProBundle\Form\SegproType;

/**
 * Segpro controller.
 *
 */
class SegproController extends Controller
{

    /**
     * Lists all Segpro entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UTASegProBundle:Segpro')->findAll();

        return $this->render('UTASegProBundle:Segpro:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Segpro entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Segpro();
        $form = $this->createForm(new SegproType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_segpro_show', array('id' => $entity->getId())));
        }

        return $this->render('UTASegProBundle:Segpro:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Segpro entity.
     *
     */
    public function newAction()
    {
        $entity = new Segpro();
        $form   = $this->createForm(new SegproType(), $entity);

        return $this->render('UTASegProBundle:Segpro:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Segpro entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UTASegProBundle:Segpro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Segpro entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UTASegProBundle:Segpro:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Segpro entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UTASegProBundle:Segpro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Segpro entity.');
        }

        $editForm = $this->createForm(new SegproType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UTASegProBundle:Segpro:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Segpro entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UTASegProBundle:Segpro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Segpro entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new SegproType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_segpro_edit', array('id' => $id)));
        }

        return $this->render('UTASegProBundle:Segpro:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Segpro entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UTASegProBundle:Segpro')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Segpro entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_segpro'));
    }

    /**
     * Creates a form to delete a Segpro entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
