<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Helvan - Gaster Nomos Restaurante";
		$data['pubs'] = "Temos gralhados mistos e uma variedade de saladas.";
		$data['about'] = array('src' => base_url("assets/images/about-img.jpg"));
		$data['custumers'] = array(
			array('nome' => 'Paul Mitchel', 'prof' => 'Web Developer', 'active' => 'active', 'src' => base_url("assets/images/profile-1.jpg"), 'coment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem
								tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper
								malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.'),
			array('nome' => 'Steve Fonsi', 'prof' => 'Web Designer', 'active' => '', 'src' => base_url("assets/images/profile-3.jpg"), 'coment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem
								tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper
								malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.'),
			array('nome' => 'Daniel vebar', 'prof' => 'Seo Analyst', 'active' => '', 'src' => base_url("assets/images/profile-7.jpg"), 'coment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem
								tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper
								malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.')
		);
		$data['social'] = array(
			'facebook' => 'https://www.facebook.com/helvangasternomosrestaurante',
			'twitter' => '#',
			'linkedin' => '#',
			'google' => '#',
			'instagram' => '#',
		);
		$data['contactos'] = array(
			'endereco' => 'Marginal de Luanda, Edifício Kilamba 1º andar',
			'telefone' => '+244939369484',
			'email' => 'info@admin.com'
		);
		$data['portfolios'] = array(
			array('sm' => '12', 'href' => base_url("assets/images/gallery-img-01.jpg")),
			array('sm' => '6', 'href' => base_url("assets/images/gallery-img-02.jpg")),
			array('sm' => '6', 'href' => base_url("assets/images/gallery-img-03.jpg")),
			array('sm' => '12', 'href' => base_url("assets/images/gallery-img-04.jpg")),
			array('sm' => '6', 'href' => base_url("assets/images/gallery-img-05.jpg")),
			array('sm' => '6', 'href' => base_url("assets/images/gallery-img-06.jpg")),
		);
		$data['menus'] = array(
			array('src' => base_url("assets/images/img-01.jpg"), 'nome' => 'Bebidas Especiais 1', 'desc' => 'Sed id magna vitae eros sagittis euismod.', 'preco' => '7.79', 'class' => 'drinks'),
			array('src' => base_url("assets/images/img-02.jpg"), 'nome' => 'Bebidas Especiais 2', 'desc' => 'Sed id magna vitae eros sagittis euismod.', 'preco' => '7.79', 'class' => 'drinks'),
			array('src' => base_url("assets/images/img-03.jpg"), 'nome' => 'Bebidas Especiais 3', 'desc' => 'Sed id magna vitae eros sagittis euismod.', 'preco' => '7.79', 'class' => 'drinks'),
			array('src' => base_url("assets/images/img-04.jpg"), 'nome' => 'Lunch Especiais 1', 'desc' => 'Sed id magna vitae eros sagittis euismod.', 'preco' => '7.79', 'class' => 'lunch'),
			array('src' => base_url("assets/images/img-05.jpg"), 'nome' => 'Lunch Especiais 2', 'desc' => 'Sed id magna vitae eros sagittis euismod.', 'preco' => '7.79', 'class' => 'lunch'),
			array('src' => base_url("assets/images/img-06.jpg"), 'nome' => 'Lunch Especiais 3', 'desc' => 'Sed id magna vitae eros sagittis euismod.', 'preco' => '7.79', 'class' => 'lunch'),
			array('src' => base_url("assets/images/img-07.jpg"), 'nome' => 'Dinner Especiais 1', 'desc' => 'Sed id magna vitae eros sagittis euismod.', 'preco' => '7.79', 'class' => 'dinner'),
			array('src' => base_url("assets/images/img-08.jpg"), 'nome' => 'Dinner Especiais 2', 'desc' => 'Sed id magna vitae eros sagittis euismod.', 'preco' => '7.79', 'class' => 'dinner'),
			array('src' => base_url("assets/images/img-09.jpg"), 'nome' => 'Dinner Especiais 3', 'desc' => 'Sed id magna vitae eros sagittis euismod.', 'preco' => '7.79', 'class' => 'dinner')
		);
		$data['slides'] = array(
			array('src' => base_url("assets/images/slider-01.jpg")),
			array('src' => base_url("assets/images/slider-02.jpg"))
		);

		$this->load->view('site/home', $data, FALSE);
	}
}
