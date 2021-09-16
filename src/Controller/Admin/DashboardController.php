<?php

namespace App\Controller\Admin;

use App\Entity\Categories;
use App\Entity\Notes;
use App\Entity\Products;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Café.com');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');

        yield MenuItem::section();
        yield MenuItem::linktoCrud('Produits', 'fa fa-coffee', Products::class);
        yield MenuItem::linktoCrud('Notes', 'fa fa-seedling', Notes::class);
        yield MenuItem::linktoCrud('Catégories', 'fa fa-folder-open', Categories::class);

        yield MenuItem::section();
        yield MenuItem::linktoCrud('Utilisateurs', 'fa fa-users', User::class);
    }
}
