<?php

namespace UTA\SegProBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use UTA\SegProBundle\Entity\Objetivos;
use UTA\SegProBundle\Form\ObjetivosType;

/**
 * Objetivos controller.
 *
 */
class ObjetivosController extends Controller
{

    /**
     * Lists all Objetivos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UTASegProBundle:Objetivos')->findAll();

        return $this->render('UTASegProBundle:Objetivos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Objetivos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Objetivos();
        $form = $this->createForm(new ObjetivosType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_objetivo_show', array('id' => $entity->getId())));
        }

        return $this->render('UTASegProBundle:Objetivos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Objetivos entity.
     *
     */
    public function newAction()
    {
        $entity = new Objetivos();
        $form   = $this->createForm(new ObjetivosType(), $entity);

        return $this->render('UTASegProBundle:Objetivos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Objetivos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UTASegProBundle:Objetivos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Objetivos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UTASegProBundle:Objetivos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Objetivos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UTASegProBundle:Objetivos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Objetivos entity.');
        }

        $editForm = $this->createForm(new ObjetivosType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UTASegProBundle:Objetivos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Objetivos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UTASegProBundle:Objetivos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Objetivos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ObjetivosType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_objetivo_edit', array('id' => $id)));
        }

        return $this->render('UTASegProBundle:Objetivos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Objetivos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UTASegProBundle:Objetivos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Objetivos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_objetivo'));
    }

    /**
     * Creates a form to delete a Objetivos entity by id.
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
