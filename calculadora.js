function suma(a, b) {
  return a + b;
}

function resta(a, b) {
  return a - b;
}

function multiplicacion(a, b) {
  return a * b;
}

function division(a, b) {
  if (b === 0) {
    return "Error: No se puede dividir por cero";
  }
  return a / b;
}

// Ejemplo de uso:
const num1 = 18;
const num2 = 26;

console.log("Suma:", suma(num1, num2));
console.log("Resta:", resta(num1, num2));
console.log("Multiplicación:", multiplicacion(num1, num2));
console.log("División:", division(num1, num2));