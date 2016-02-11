

function generateCoinChange(n){
	var original = n;
	var remainder = original % 100;
	var dollar = (original -remainder) / 100;
	var qremainder = remainder % 25;
	var quarter = (remainder - qremainder) / 25;
	var dimeremainder = qremainder%10;
	var dime = (qremainder - dimeremainder) / 10;
	var penny = dimeremainder % 5;
	var nickel = (dimeremainder - penny) / 5;
	console.log(dollar);
	console.log(quarter);
	console.log(dime);
	console.log(nickel);
	console.log(penny);
}


console.log(generateCoinChange(578))