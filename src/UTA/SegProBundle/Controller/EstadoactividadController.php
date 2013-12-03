<?php

namespace UTA\SegProBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use UTA\SegProBundle\Entity\Estadoactividad;
use UTA\SegProBundle\Form\EstadoactividadType;

/**
 * Estadoactividad controller.
 *
 */
class EstadoactividadController extends Controller
{

    /**
     * Lists all Estadoactividad entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UTASegProBundle:Estadoactividad')->findAll();

        return $this->render('UTASegProBundle:Estadoactividad:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Estadoactividad entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Estadoactividad();
        $form = $this->createForm(new EstadoactividadType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_estadoactividad_show', array('id' => $entity->getId())));
        }

        return $this->render('UTASegProBundle:Estadoactividad:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Estadoactividad entity.
     *
     */
    public function newAction()
    {
        $entity = new Estadoactividad();
        $form   = $this->createForm(new EstadoactividadType(), $entity);

        return $this->render('UTASegProBundle:Estadoactividad:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Estadoactividad entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UTASegProBundle:Estadoactividad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Estadoactividad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UTASegProBundle:Estadoactividad:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Estadoactividad entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UTASegProBundle:Estadoactividad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Estadoactividad entity.');
        }

        $editForm = $this->createForm(new EstadoactividadType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UTASegProBundle:Estadoactividad:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Estadoactividad entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UTASegProBundle:Estadoactividad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Estadoactividad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EstadoactividadType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_estadoactividad_edit', array('id' => $id)));
        }

        return $this->render('UTASegProBundle:Estadoactividad:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Estadoactividad entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UTASegProBundle:Estadoactividad')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Estadoactividad entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_estadoactividad'));
    }

    /**
     * Creates a form to delete a Estadoactividad entity by id.
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
