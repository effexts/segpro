<?php

namespace UTA\SegProBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use UTA\SegProBundle\Entity\Estadoproyecto;
use UTA\SegProBundle\Form\EstadoproyectoType;

/**
 * Estadoproyecto controller.
 *
 */
class EstadoproyectoController extends Controller
{

    /**
     * Lists all Estadoproyecto entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UTASegProBundle:Estadoproyecto')->findAll();

        return $this->render('UTASegProBundle:Estadoproyecto:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Estadoproyecto entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Estadoproyecto();
        $form = $this->createForm(new EstadoproyectoType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_estadoproyecto_show', array('id' => $entity->getId())));
        }

        return $this->render('UTASegProBundle:Estadoproyecto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Estadoproyecto entity.
     *
     */
    public function newAction()
    {
        $entity = new Estadoproyecto();
        $form   = $this->createForm(new EstadoproyectoType(), $entity);

        return $this->render('UTASegProBundle:Estadoproyecto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Estadoproyecto entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UTASegProBundle:Estadoproyecto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Estadoproyecto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UTASegProBundle:Estadoproyecto:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Estadoproyecto entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UTASegProBundle:Estadoproyecto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Estadoproyecto entity.');
        }

        $editForm = $this->createForm(new EstadoproyectoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UTASegProBundle:Estadoproyecto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Estadoproyecto entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UTASegProBundle:Estadoproyecto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Estadoproyecto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EstadoproyectoType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_estadoproyecto_edit', array('id' => $id)));
        }

        return $this->render('UTASegProBundle:Estadoproyecto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Estadoproyecto entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UTASegProBundle:Estadoproyecto')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Estadoproyecto entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_estadoproyecto'));
    }

    /**
     * Creates a form to delete a Estadoproyecto entity by id.
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
