<?php

namespace UTA\SegProBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use UTA\SegProBundle\Entity\Fichaproyecto;
use UTA\SegProBundle\Form\FichaproyectoType;

/**
 * Fichaproyecto controller.
 *
 */
class FichaproyectoController extends Controller
{

    /**
     * Lists all Fichaproyecto entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UTASegProBundle:Fichaproyecto')->findAll();

        return $this->render('UTASegProBundle:Fichaproyecto:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Fichaproyecto entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Fichaproyecto();
        $form = $this->createForm(new FichaproyectoType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_fichaproyecto_show', array('id' => $entity->getId())));
        }

        return $this->render('UTASegProBundle:Fichaproyecto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Fichaproyecto entity.
     *
     */
    public function newAction()
    {
        $entity = new Fichaproyecto();
        $form   = $this->createForm(new FichaproyectoType(), $entity);

        return $this->render('UTASegProBundle:Fichaproyecto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Fichaproyecto entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UTASegProBundle:Fichaproyecto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fichaproyecto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UTASegProBundle:Fichaproyecto:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Fichaproyecto entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UTASegProBundle:Fichaproyecto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fichaproyecto entity.');
        }

        $editForm = $this->createForm(new FichaproyectoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UTASegProBundle:Fichaproyecto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Fichaproyecto entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UTASegProBundle:Fichaproyecto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fichaproyecto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new FichaproyectoType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_fichaproyecto_edit', array('id' => $id)));
        }

        return $this->render('UTASegProBundle:Fichaproyecto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Fichaproyecto entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UTASegProBundle:Fichaproyecto')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Fichaproyecto entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_fichaproyecto'));
    }

    /**
     * Creates a form to delete a Fichaproyecto entity by id.
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
