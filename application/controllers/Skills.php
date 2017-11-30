<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skills extends CI_Controller {

	public function getSkill(){
		$skill = '[
			{
				"id": 1,
				"name": "HTML-CSS",
				"numOfCourse": "4",
				"description": "Learn the fundamentals of design, front-end development, and crafting user experiences that are easy on the eyes.",
				"imgUrl": "badge-html-css.svg"
			},
			{
				"id": 2,
				"name": "JavaScript",
				"numOfCourse": "3",
				"description": "Spend some time with this powerful scriptiong language and learn to build lightweight applications with enhanced user interfaces.",
				"imgUrl": "badge-javascript.svg"
			},
			{
				"id": 3,
				"name": "Ruby",
				"numOfCourse": "2",
				"description": "Master your Ruby skills and increase your Rails street cred by learnng to build dynamic, sustainable application for the web.",
				"imgUrl": "badge-ruby.svg"
			},
			{
				"id": 4,
				"name": "PHP",
				"numOfCourse": "2",
				"description": "Dig into one of the most prevalent programming languages and learn how PHP can help you develop various applications for the web.",
				"imgUrl": "badge-php.svg"
			},
			{
				"id": 5,
				"name": "Python",
				"numOfCourse": "2",
				"description": "Explore what it means to strore and manipulate data, make decisions with your program, and leverage the power of Python.",
				"imgUrl": "badge-python.svg"
			},
			{
				"id": 6,
				"name": "Git",
				"numOfCourse": "4",
				"description": "Build a solid foundation in Git, then pair it with advanced version control skills. Learn how to collaborate on projects effectively with Github.",
				"imgUrl": "badge-git.svg"
			},
			{
				"id": 7,
				"name": "Database",
				"numOfCourse": "2",
				"description": "Take control of your application data layer by learning SQL, and take NoSQL, for a spin if you are feeling non-relation.",
				"imgUrl": "badge-database.svg"
			}
		]';

		return $skill;
	}

	public function index() {
		$data['title'] = "Skills Path";
		$data_skill = $this->getSkill();
		$data['skill_path'] = json_decode($data_skill);
		$data['signin'] = true;

		$this->template->load('base', 'skills/index', $data);
	}

	public function content() {
		$data['title'] = 'javascript';
		$data['signin'] = true;

		$this->template->load('base', 'skills/content', $data);
	}
}
