<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/categorie')]
class CategorieController extends AbstractController
{
    #[Route('/show/back', name: 'app_categorie_index_back', methods: ['GET'])]
    public function index(CategorieRepository $categorieRepository): Response
    {
        return $this->render('back/categorie/CategorieB.html.twig', [
            'categories' => $categorieRepository->findAll(),
        ]);
    }


    #[Route('/new', name: 'app_categorie_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CategorieRepository $categorieRepository): Response
    {
        $categorie = new Categorie();
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $categorieRepository->save($categorie, true);

            return $this->redirectToRoute('app_categorie_index_back', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/categorie/new.html.twig', [
            'categorie' => $categorie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_categorie_show', methods: ['GET'])]
    public function show(Categorie $categorie): Response
    {
        return $this->render('back/categorie/show.html.twig', [
            'categorie' => $categorie,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_categorie_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Categorie $categorie, CategorieRepository $categorieRepository): Response
    {
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $categorieRepository->save($categorie, true);

            return $this->redirectToRoute('app_categorie_index_back', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/categorie/edit.html.twig', [
            'categorie' => $categorie,
            'form' => $form,
        ]);
    }

    #[Route('/delete/{id}', name: 'app_categorie_delete', methods: ['GET', 'POST'])]
    public function delete(Request $request, Categorie $categorie, ProduitRepository $PR, CategorieRepository $categorieRepository): Response
    {
        $results = $categorie->getProduits();
        for ($i = 0; $i < count($results); $i++) {
            $results[$i]->setCategorie(null);
            $PR->save($results[$i], true);
        }

        if ($this->isCsrfTokenValid('delete' . $categorie->getId(), $request->request->get('_token'))) {
            $categorieRepository->remove($categorie, true);
        }

        return $this->redirectToRoute('app_categorie_index_back', [], Response::HTTP_SEE_OTHER);
    }
}