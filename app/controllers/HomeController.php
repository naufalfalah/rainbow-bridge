<?php

class HomeController extends Controller {
    public function index() {
        $model = $this->model('HomeModel');
        $company = $model->getCompanyInfo();

        $serviceModel = $this->model('ServiceModel');
        $services = $serviceModel->getServices();

        $testimonyModel = $this->model('TestimonyModel');
        $testimonies = $testimonyModel->getTestimonies();

        $faqModel = $this->model('FaqModel');
        $faqs = $faqModel->getFaqs();

        $this->view('home', [
            'company' => $company,
            'services' => $services,
            'testimonies' => $testimonies,
            'faqs' => $faqs,
        ]);
    }
}