<?php

namespace UTA\SegProBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use UTA\SegProBundle\Entity\Actividad;
use UTA\SegProBundle\Form\ActividadType;

/**
 * Actividad controller.
 *
 */
class ActividadController extends Controller
{

    /**
     * Lists all Actividad entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UTASegProBundle:Actividad')->findAll();

        return $this->render('UTASegProBundle:Actividad:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Actividad entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Actividad();
        $form = $this->createForm(new ActividadType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_actividad_show', array('id' => $entity->getId())));
        }

        return $this->render('UTASegProBundle:Actividad:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Actividad entity.
     *
     */
    public function newAction()
    {
        $entity = new Actividad();
        $form   = $this->createForm(new ActividadType(), $entity);

        return $this->render('UTASegProBundle:Actividad:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Actividad entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UTASegProBundle:Actividad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Actividad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UTASegProBundle:Actividad:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Actividad entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UTASegProBundle:Actividad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Actividad entity.');
        }

        $editForm = $this->createForm(new ActividadType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UTASegProBundle:Actividad:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Actividad entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UTASegProBundle:Actividad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Actividad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ActividadType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_actividad_edit', array('id' => $id)));
        }

        return $this->render('UTASegProBundle:Actividad:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Actividad entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UTASegProBundle:Actividad')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Actividad entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_actividad'));
    }

    /**
     * Creates a form to delete a Actividad entity by id.
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
