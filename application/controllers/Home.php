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
			'email' => 'Gaster.nomos@helvan.co.ao'
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
			array('src' => base_url("assets/images/novas/1.jpeg"), 'nome' => 'Calulú de carne seca', 'desc' => '', 'preco' => '', 'class' => 'drinks'),
			array('src' => base_url("assets/images/novas/2.jpeg"), 'nome' => 'Bife a parmegiana', 'desc' => '', 'preco' => '', 'class' => 'drinks'),
			array('src' => base_url("assets/images/novas/3.jpeg"), 'nome' => 'Peixe escalado', 'desc' => '', 'preco' => '', 'class' => 'drinks'),
			array('src' => base_url("assets/images/novas/4.jpeg"), 'nome' => 'Arroz de tomate com filetes', 'desc' => '', 'preco' => '', 'class' => 'drinks'),
			array('src' => base_url("assets/images/novas/5.jpeg"), 'nome' => 'Cheesecake', 'desc' => '', 'preco' => '', 'class' => 'drinks'),
			array('src' => base_url("assets/images/novas/6.jpeg"), 'nome' => 'Bolos sortidos', 'desc' => '', 'preco' => '', 'class' => 'drinks'),
			array('src' => base_url("assets/images/novas/7.jpeg"), 'nome' => 'Frutas laminadas', 'desc' => '', 'preco' => '', 'class' => 'drinks'),
			array('src' => base_url("assets/images/novas/8.jpeg"), 'nome' => 'Rabinho de boi', 'desc' => '', 'preco' => '', 'class' => 'drinks'),
			array('src' => base_url("assets/images/novas/9.jpeg"), 'nome' => 'Leitão à bairrada', 'desc' => '', 'preco' => '', 'class' => 'drinks'),
			array('src' => base_url("assets/images/novas/10.jpeg"), 'nome' => 'Lulas recheadas', 'desc' => '', 'preco' => '', 'class' => 'drinks'),
			array('src' => base_url("assets/images/novas/11.jpg"), 'nome' => 'Lasanha de carne', 'desc' => '', 'preco' => '', 'class' => 'drinks'),
			array('src' => base_url("assets/images/novas/12.JPG"), 'nome' => 'Grelhada mista', 'desc' => '', 'preco' => '', 'class' => 'drinks'),
		);
		$data['slides'] = array(
			array('src' => base_url("assets/images/slider-01.jpg")),
			array('src' => base_url("assets/images/slider-02.jpg"))
		);

		$this->load->view('site/home', $data, FALSE);
	}
}
