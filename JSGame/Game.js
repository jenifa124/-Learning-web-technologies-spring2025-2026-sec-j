//Tic tac toe game 
const cells = document.querySelectorAll(".cell");
const statusText = document.getElementById("status");
const resetBtn = document.getElementById("reset");

let currentPlayer = "X";
let board = ["","","","","","","","",""];
let gameActive = true;

const winPatterns = [
[0,1,2],
[3,4,5],
[6,7,8],
[0,3,6],
[1,4,7],
[2,5,8],
[0,4,8],
[2,4,6]
];

cells.forEach((cell,index)=>{
cell.addEventListener("click",()=>cellClick(cell,index));
});

function cellClick(cell,index){

if(board[index] !== "" || !gameActive){
return;
}

board[index] = currentPlayer;
cell.textContent = currentPlayer;

checkWinner();

if(gameActive){
currentPlayer = currentPlayer === "X" ? "O" : "X";
statusText.textContent = "Current Player: " + currentPlayer;
}

}

function checkWinner(){

for(let pattern of winPatterns){

let a = pattern[0];
let b = pattern[1];
let c = pattern[2];

if(board[a] && board[a] === board[b] && board[a] === board[c]){

cells[a].classList.add("winner");
cells[b].classList.add("winner");
cells[c].classList.add("winner");

statusText.textContent = "Winner: " + board[a];
gameActive = false;
return;

}
}

if(!board.includes("")){
statusText.textContent = "It's a Draw!";
gameActive = false;
}

}

resetBtn.addEventListener("click",resetGame);

function resetGame(){

board = ["","","","","","","","",""];
currentPlayer = "X";
gameActive = true;

cells.forEach(cell=>{
cell.textContent="";
cell.classList.remove("winner");
});

statusText.textContent="Current Player: X";

}