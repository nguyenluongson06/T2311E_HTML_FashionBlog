let money_spent = 0;
let money_won = 0;

for (let i = 1; i <= 7; i++){
    //generate array of the day
    var arr = [];
    for (let j = 1; j <= 23; j++){
        var random = parseInt(Math.random() * 100);
        arr.push(random);
    }

    //get money spent (that day) and number from user
    var money = parseInt(prompt(`Day ${i}: Enter the amount of money you want to spend (rate: 23 dong/1 point)`));
    var number = parseInt(prompt("Enter your number: "));

    var user_point = parseInt(money / 23);
    var count = 0;
    arr.forEach(e => {
        e == number ? count++ : count += 0;
    })
    money_spent += money;
    money_won += 80*count*user_point;
    console.log(`${money_spent} - ${money_won}`)
}

alert(`You spent ${money_spent} dong and won ${money_won} dong`);