<?php

class Controller_Song extends Controller_Rest
{

	public function get_list()
		{

			return $this->respone(array(

				'id' => 1,
				'titulo' => "Tu cancion",
				'duracion' => "3:27",
				'album' => "Mi album",
			));

		}

	}











}