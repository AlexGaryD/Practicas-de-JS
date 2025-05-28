// Esta función recibe cinco números y encuentra el mayor y el menor entre ellos
function numeroMayorYMenor(a, b, c, d, e) {
  // Se crea un arreglo con los cinco números recibidos
  const numeros = [a, b, c, d, e];
  // Se inicializan las variables mayor y menor con el primer número del arreglo
  let mayor = numeros[0];
  let menor = numeros[0];

  // Se recorre el arreglo desde el segundo elemento hasta el final
  for (let i = 1; i < numeros.length; i++) {
    // Si el número actual es mayor que el valor de 'mayor', se actualiza 'mayor'
    if (numeros[i] > mayor) {
      mayor = numeros[i];
    }
    // Si el número actual es menor que el valor de 'menor', se actualiza 'menor'
    if (numeros[i] < menor) {
      menor = numeros[i];
    }
  }

  // Se retorna un objeto con el número mayor y el menor encontrados
  return { mayor, menor };
}

// Ejemplo de uso de la función:
// Se llama a la función con cinco números y se imprime el resultado
const resultado1 = numeroMayorYMenor(18, 20, 24, 38, 40);
console.log("El número mayor es:", resultado1.mayor);
console.log("El número menor es:", resultado1.menor);

// Puedes repetir el proceso con diferentes conjuntos de números
const resultado2 = numeroMayorYMenor(5, 10, 15, 20, 25);
console.log("El número mayor es:", resultado2.mayor);
console.log("El número menor es:", resultado2.menor);

const resultado3 = numeroMayorYMenor(1, 2, 3, 4, 5);
console.log("El número mayor es:", resultado3.mayor);
console.log("El número menor es:", resultado3.menor);

const resultado4 = numeroMayorYMenor(100, 200, 300, 400, 500);
console.log("El número mayor es:", resultado4.mayor);
console.log("El número menor es:", resultado4.menor);

const resultado5 = numeroMayorYMenor(10, 20, 30, 40, 50);
console.log("El número mayor es:", resultado5.mayor);
console.log("El número menor es:", resultado5.menor);

const resultado6 = numeroMayorYMenor(7, 14, 21, 28, 35);
console.log("El número mayor es:", resultado6.mayor);
console.log("El número menor es:", resultado6.menor);