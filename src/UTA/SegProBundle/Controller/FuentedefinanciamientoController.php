<?php

namespace UTA\SegProBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use UTA\SegProBundle\Entity\Fuentedefinanciamiento;
use UTA\SegProBundle\Form\FuentedefinanciamientoType;

/**
 * Fuentedefinanciamiento controller.
 *
 */
class FuentedefinanciamientoController extends Controller
{

    /**
     * Lists all Fuentedefinanciamiento entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UTASegProBundle:Fuentedefinanciamiento')->findAll();

        return $this->render('UTASegProBundle:Fuentedefinanciamiento:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Fuentedefinanciamiento entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Fuentedefinanciamiento();
        $form = $this->createForm(new FuentedefinanciamientoType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_fuentedefinanciamiento_show', array('id' => $entity->getId())));
        }

        return $this->render('UTASegProBundle:Fuentedefinanciamiento:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Fuentedefinanciamiento entity.
     *
     */
    public function newAction()
    {
        $entity = new Fuentedefinanciamiento();
        $form   = $this->createForm(new FuentedefinanciamientoType(), $entity);

        return $this->render('UTASegProBundle:Fuentedefinanciamiento:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Fuentedefinanciamiento entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UTASegProBundle:Fuentedefinanciamiento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fuentedefinanciamiento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UTASegProBundle:Fuentedefinanciamiento:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Fuentedefinanciamiento entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UTASegProBundle:Fuentedefinanciamiento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fuentedefinanciamiento entity.');
        }

        $editForm = $this->createForm(new FuentedefinanciamientoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UTASegProBundle:Fuentedefinanciamiento:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Fuentedefinanciamiento entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UTASegProBundle:Fuentedefinanciamiento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fuentedefinanciamiento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new FuentedefinanciamientoType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_fuentedefinanciamiento_edit', array('id' => $id)));
        }

        return $this->render('UTASegProBundle:Fuentedefinanciamiento:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Fuentedefinanciamiento entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UTASegProBundle:Fuentedefinanciamiento')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Fuentedefinanciamiento entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_fuentedefinanciamiento'));
    }

    /**
     * Creates a form to delete a Fuentedefinanciamiento entity by id.
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
