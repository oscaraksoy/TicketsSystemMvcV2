<?php

namespace controller;

use model\Calendar as Calendar;
use dao\CalendarDAO as CalendarDAO;
use controller\Controller as Controller;

class CalendarController extends Controller
{
  private $calendarDao;

  function __construct()
  {
    parent::__construct();
    $this->calendarDao = CalendarDAO::getInstance();
  }

  public function index()
  {
      $calendars = $this->calendarDao->readAll();

      $this->render("viewCalendar/createCalendar",[
        "calendars" => $calendars
      ]);
  }

  public function save($calendarData = [])
  {
    $newCalendar = new Calendar();

    $event = $calendarData->getEvent();
    $idEvent = $event->getIdEvent();

    $placeEvent = $calendarData->getPlaceEvent();
    $idPlaceEvent = $placeEvent->getIdPlaceEvent();

    $newCalendar->setEventCalendar($idEvent)
    ->setPlaceEvent($idPlaceEvent)
    ->setDateStart($calendarData["date_start"])
    ->setDateEnd($calendarData["date_end"]);

    $this->calendarDao->create($newCalendar);

    $this->redirect("/calendar/");
  }

  public function create()
	{
		if( ! $this->isLogged())
		$this->redirect('/default/login');
		else
		$this->render("viewCalendar/createCalendar");
	}

	public function list() //listar todo
  {
    $listCalendars = $this->calendarDao->readAll();

    if( ! $this->isLogged())
    $this->redirect('/default/login');
    else
    $this->render("viewCalendar/createCalendar",array(
      'listCalendars' => $listCalendars
    ));
	}

  public function delete($id)
	{
		$searchedCalendar = $this->calendarDao->delete($id);
		$this->redirect("/calendar/");
	}

  public function updateC($calendarData = [])
	{
		$newCalendar = new Calendar();

    $event = $calendarData->getEvent();
    $idEvent = $event->getIdEvent();

    $placeEvent = $calendarData->getPlaceEvent();
    $idPlaceEvent = $placeEvent->getIdPlaceEvent();

    $newCalendar->setEventCalendar($idEvent)
    ->setPlaceEvent($idPlaceEvent)
    ->setDateStart($calendarData["date_start"])
    ->setDateEnd($calendarData["date_end"]);

		try
		{
			$this->calendarDao->update($calendar);
		}
		catch(\PDOException $e)
		{
			echo $e->getMessage();
		}
		catch(\Exception $e){
			echo $e->getMessage();
		}

		$searchedCalendar = $this->calendarDao->read($id_calendar); // calendario buscado

		$this->render("viewCalendar/updateCalendar");

		$this->redirect('/calendar/');

	}






















}