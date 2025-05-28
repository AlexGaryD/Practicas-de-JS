// Número mayor en Platzi
// Esta función recibe cinco números y encuentra el mayor y el menor entre ellos 
let numeros= [5,10,60,8,100,101]
// Se crea un arreglo con los números
// Se inicializa la variable numeroMaximo con el valor más bajo posible 
let numeroMaximo = 0
// Se recorre el arreglo para encontrar el número mayor
// Se obtiene el tamaño del arreglo
let tamaño = numeros.length
// Se recorre el arreglo desde el primer elemento hasta el final
for (let i = 0; i < tamaño; i++) {
    // Si el número actual es mayor que el valor de numeroMaximo, se actualiza numeroMaximo
    if(numeroMaximo < numeros[i]){
        // Actualiza numeroMaximo con el número actual
        numeroMaximo = numeros[i]
    }
}
console.log("El número mayor es:", numeroMaximo);
// Esta función recibe cinco números y encuentra el menor entre ellos
let maximo = Math.max(5, 10, 60, 8, 100, 101);
console.log("El número mayor es:", maximo);
// Esta función recibe cinco números y encuentra el menor entre ellos
let minimo = Math.min(5, 10, 60, 8, 100, 101);
// Se utiliza Math.min para encontrar el número menor
console.log("El número menor es:", minimo);
// Se utiliza Math.max para encontrar el número mayor