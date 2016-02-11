<?php
class Deck 
{
	// 52 standard cards, 13 cards and 4 pips.
	//shuffle, reset, and ability to deal cards.
	public $total_cards;
	public $cards;
	public $pips;

	public function __construct()
	{
		$this->total_cards = [12][3]; // 13 * 4 = 52
		$this->cards = ['1','2','3','4','5','6','7','8','9','10','Q','K']; // A,K,Q,2-10
		$this->pips = ['c','s','d','h']; // clubs, spades, hearts, diamonds
	}
	public function shuffle()
	{
//random function
	}
	public function reset()
	{
//reset it
	};
	public function deal()
	{
//deal with it
	};

}
class Player 
{
	public $name;

	public function name()
		{
			$this->name = '';
		}
	public function hand()
		{

		}
	public function discard()
		{

		}
}
?>