<?php

namespace EDiaryBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use EDiaryBundle\Entity\Courses;
use EDiaryBundle\Form\CoursesType;

/**
 * Courses controller.
 *
 * @Route("/courses")
 */
class CoursesController extends Controller
{
    /**
     * Lists all Courses entities.
     *
     * @Route("/", name="courses_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $courses = $em->getRepository('EDiaryBundle:Courses')->findAll();

        return $this->render('courses/index.html.twig', array(
            'courses' => $courses,
        ));
    }

    /**
     * Creates a new Courses entity.
     *
     * @Route("/new", name="courses_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $course = new Courses();
        $form = $this->createForm('EDiaryBundle\Form\CoursesType', $course);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($course);
            $em->flush();

            return $this->redirectToRoute('courses_show', array('id' => $course->getId()));
        }

        return $this->render('courses/new.html.twig', array(
            'course' => $course,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Courses entity.
     *
     * @Route("/{id}", name="courses_show")
     * @Method("GET")
     */
    public function showAction(Courses $course)
    {
        $deleteForm = $this->createDeleteForm($course);

        return $this->render('courses/show.html.twig', array(
            'course' => $course,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Courses entity.
     *
     * @Route("/{id}/edit", name="courses_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Courses $course)
    {
        $deleteForm = $this->createDeleteForm($course);
        $editForm = $this->createForm('EDiaryBundle\Form\CoursesType', $course);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($course);
            $em->flush();

            return $this->redirectToRoute('courses_edit', array('id' => $course->getId()));
        }

        return $this->render('courses/edit.html.twig', array(
            'course' => $course,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Courses entity.
     *
     * @Route("/{id}", name="courses_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Courses $course)
    {
        $form = $this->createDeleteForm($course);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($course);
            $em->flush();
        }

        return $this->redirectToRoute('courses_index');
    }

    /**
     * Creates a form to delete a Courses entity.
     *
     * @param Courses $course The Courses entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Courses $course)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('courses_delete', array('id' => $course->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
