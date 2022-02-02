<?php

namespace App\Controller\BackOffice;

use App\Repository\SkillRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

/**
 * Class SkillController
 * @package App\Controller\BackOffice
 * @Route("/admin/skills")
 */
class SkillController extends AbstractController
{
    /**
     * @Route(name="skill_manage")
     * @param SkillRepository $skillRepository
     * @return Response
     */
    public function manage(SkillRepository $skillRepository): Response
    {
        $skills = $skillRepository->findAll();

        return $this->twig->render("back_office/skill/manage.html.twig", [
            "skills" => $skills
        ]);
    }

    public function create(): Response
    {

    }

    public function update(): Response
    {

    }

    public function delete(): RedirectResponse
    {

    }
}
