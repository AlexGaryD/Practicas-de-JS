function numeroMayor(a,b,c,d,e) {
  const numeros = [a, b, c, d, e
  ];
  let mayor = numeros[0];

  for (let i = 0; i < numeros.length; i++) {
    if (numeros[i] > mayor) {
      mayor = numeros[i];
    }
  }

  return mayor;
}
console.log("El número mayor es:", numeroMayor(18, 20, 24,38, 40));