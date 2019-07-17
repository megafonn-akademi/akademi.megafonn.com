<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CourseController
 * @package App\Controller
 * @Route("/kurs")
 */
class CourseController extends AbstractController {
	/**
	 * @Route("/{course}")
	 */
	public function show(string $course) {
		$videos = [
			[
				'id' => 'oAM6ZuSSUcY',
				'title' => 'Genel Ayarlar - Bölüm 1',
				'duration' => '6dk, 8sn',
			],
			[
				'id' => 'BxUlF_48--c',
				'title' => 'Genel Ayarlar - Bölüm 2',
				'duration' => '10dk, 27sn',
			],
			[
				'id' => 'wq4OnZTS6DQ',
				'title' => 'Genel Ayarlar - Bölüm 3',
				'duration' => '8dk, 30sn',
			],
			[
				'id' => 'miIBQU2ShmM',
				'title' => 'Kategori Yönetimi',
				'duration' => '5dk, 30sn',
			],
			[
				'id' => 'kQrGNbnA0Mg',
				'title' => 'Ürün Oluşturma',
				'duration' => '8dk, 51sn',
			],
			[
				'id' => 'sWiUCMXTDgA',
				'title' => 'Ürün Özellikleri',
				'duration' => '3dk, 23sn',
			],
			[
				'id' => 'EkOkU_wfb_c',
				'title' => 'Ürün Seçenekleri',
				'duration' => '5dk, 24sn',
			],
			[
				'id' => 'jHq1eavmNQA',
				'title' => 'Üreticiler',
				'duration' => '2dk, 1sn',
			],
			[
				'id' => 'BA1dSM4Iroo',
				'title' => 'Bilgi Sayfaları',
				'duration' => '2dk, 25sn',
			],
			[
				'id' => 'JKY1ZGypu3k',
				'title' => 'Vergiler',
				'duration' => '3dk, 53sn',
			],
			[
				'id' => '1qIjlhqyoHg',
				'title' => 'Müşteri Yönetimi',
				'duration' => '5dk, 16sn',
			],
			[
				'id' => 'fimeQ7sWVYo',
				'title' => 'Müşteri Grupları',
				'duration' => '5dk, 29sn',
			],
			[
				'id' => '1DCgNNRu7_Y',
				'title' => 'Ödeme Metodu Ekleme',
				'duration' => '5dk, 22sn',
			],
			[
				'id' => 'GZHJMospbXE',
				'title' => 'Sipariş Yönetimi',
				'duration' => '4dk, 6sn',
			]
		];
		return $this->render('course/lessons.html.twig', [
			'videos' => $videos,
		]);
	}
}