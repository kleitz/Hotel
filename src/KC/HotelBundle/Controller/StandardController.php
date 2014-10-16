<?php

namespace KC\HotelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use KC\HotelBundle\Entity\Standard;
use KC\HotelBundle\Form\StandardType;

/**
 * Standard controller.
 *
 * @Route("/admin/standard")
 */
class StandardController extends Controller
{

    /**
     * Lists all Standard entities.
     *
     * @Route("/", name="admin_standard")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('KCHotelBundle:Standard')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Standard entity.
     *
     * @Route("/", name="admin_standard_create")
     * @Method("POST")
     * @Template("KCHotelBundle:Standard:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Standard();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_standard_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Standard entity.
     *
     * @param Standard $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Standard $entity)
    {
        $form = $this->createForm(new StandardType(), $entity, array(
            'action' => $this->generateUrl('admin_standard_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Standard entity.
     *
     * @Route("/new", name="admin_standard_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Standard();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Standard entity.
     *
     * @Route("/{id}", name="admin_standard_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KCHotelBundle:Standard')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Standard entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Standard entity.
     *
     * @Route("/{id}/edit", name="admin_standard_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KCHotelBundle:Standard')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Standard entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Standard entity.
    *
    * @param Standard $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Standard $entity)
    {
        $form = $this->createForm(new StandardType(), $entity, array(
            'action' => $this->generateUrl('admin_standard_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Standard entity.
     *
     * @Route("/{id}", name="admin_standard_update")
     * @Method("PUT")
     * @Template("KCHotelBundle:Standard:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KCHotelBundle:Standard')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Standard entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_standard_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Standard entity.
     *
     * @Route("/{id}", name="admin_standard_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('KCHotelBundle:Standard')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Standard entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_standard'));
    }

    /**
     * Creates a form to delete a Standard entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_standard_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
