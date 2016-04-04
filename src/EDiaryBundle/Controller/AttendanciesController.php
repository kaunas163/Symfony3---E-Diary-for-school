<?php

namespace EDiaryBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use EDiaryBundle\Entity\Attendancies;
use EDiaryBundle\Form\AttendanciesType;

/**
 * Attendancies controller.
 *
 * @Route("/attendancies")
 */
class AttendanciesController extends Controller
{
    /**
     * Lists all Attendancies entities.
     *
     * @Route("/", name="attendancies_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $attendancies = $em->getRepository('EDiaryBundle:Attendancies')->findAll();

        return $this->render('attendancies/index.html.twig', array(
            'attendancies' => $attendancies,
        ));
    }

    /**
     * Creates a new Attendancies entity.
     *
     * @Route("/new", name="attendancies_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $attendancy = new Attendancies();
        $form = $this->createForm('EDiaryBundle\Form\AttendanciesType', $attendancy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($attendancy);
            $em->flush();

            return $this->redirectToRoute('attendancies_show', array('id' => $attendancy->getId()));
        }

        return $this->render('attendancies/new.html.twig', array(
            'attendancy' => $attendancy,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Attendancies entity.
     *
     * @Route("/{id}", name="attendancies_show")
     * @Method("GET")
     */
    public function showAction(Attendancies $attendancy)
    {
        $deleteForm = $this->createDeleteForm($attendancy);

        return $this->render('attendancies/show.html.twig', array(
            'attendancy' => $attendancy,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Attendancies entity.
     *
     * @Route("/{id}/edit", name="attendancies_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Attendancies $attendancy)
    {
        $deleteForm = $this->createDeleteForm($attendancy);
        $editForm = $this->createForm('EDiaryBundle\Form\AttendanciesType', $attendancy);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($attendancy);
            $em->flush();

            return $this->redirectToRoute('attendancies_edit', array('id' => $attendancy->getId()));
        }

        return $this->render('attendancies/edit.html.twig', array(
            'attendancy' => $attendancy,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Attendancies entity.
     *
     * @Route("/{id}", name="attendancies_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Attendancies $attendancy)
    {
        $form = $this->createDeleteForm($attendancy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($attendancy);
            $em->flush();
        }

        return $this->redirectToRoute('attendancies_index');
    }

    /**
     * Creates a form to delete a Attendancies entity.
     *
     * @param Attendancies $attendancy The Attendancies entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Attendancies $attendancy)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('attendancies_delete', array('id' => $attendancy->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
