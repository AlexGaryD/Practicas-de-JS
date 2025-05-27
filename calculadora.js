function calculadora(num1, operador, num2) {
  let resultado;
  switch (operador) {
    case "+":
      resultado = num1 + num2;
      break;
    case "-":
      resultado = num1 - num2;
      break;
    case "*":
      resultado = num1 * num2;
      break;
    case "/":
      if (num2 === 0) {
        resultado = "Error: No se puede dividir por cero";
      } else {
        resultado = num1 / num2;
      }
      break;
    default:
      resultado = "Operador inexistente";
      break;
  }
  console.log(resultado);
}

const num1 = parseInt(prompt("Ingrese un número:"));
const operador = prompt("Elija operador: +, -, *, / ");
const num2 = parseInt(prompt("Ingrese otro número:"));

if (isNaN(num1) || isNaN(num2)) {
  console.log("Error: Debe ingresar números válidos.");
} else {
  calculadora(num1, operador, num2);
}