# kata-catan

**Kata 27 per l'especialitat fullstackPHP 1-2-24**

Es tracta de representar informació i processos de compra en el context
del joc de taula [Catán](https://es.wikipedia.org/wiki/Los_colonos_de_Cat%C3%A1n)

En concret necessitarem registrar:

- Nom
- Unitats de: Fusta, llana, cereals,argila y metall.

Un jugador pot construir diferents coses:
- Carretera(1 fusta i una argila)´
- Poblat(una fusta, una argila, un cereal i una llana)
- Ciutat(2 cereals y 3 metalls)
- Carta de desenvolupament(1 cereal,llana,metall)

Si un jugador no pot comprar el recurs en qüestió, s'ha de mostrar un missatge
d'error.

Programa un jugador de Catán que pugui realitzar aquestes operacions.

**Bonus track:** Fes el mateix amb més d'un jugador.

Per exemple, si tenim una jugadora que es diu Alba i té 3 de fusta,1 de llana, 1 argila,1 metall i 2 cereals...

**Input**
- Comprar Carretera
- Comprar Poblat

**Output**
- Fet! Ha costat 1 fusta i 1 argila!
- No tens recursos per fer un Poblat!

