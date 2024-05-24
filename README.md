# Tp_objetos

El código implementa un sistema básico de simulación de recolección de alimentos por parte de aldeanos y pescadores. Se definen clases que representan a los aldeanos, los arbustos de los que recolectan alimentos, los pescadores y los bancos de pesca. Cada clase tiene métodos para recolectar alimentos y obtener la cantidad total de alimentos disponible.

Para mantener la coherencia en la recolección de alimentos, se utilizan interfaces y traits. Las interfaces definen los métodos necesarios para recolectar alimentos y obtener la cantidad de alimentos, mientras que los traits implementan estos métodos en las clases correspondientes.

Además, se introduce una funcionalidad adicional al permitir que los aldeanos tengan bonificaciones especiales. Esto se logra mediante una clase abstracta de aldeanos con métodos y atributos comunes, y luego se crean clases concretas que heredan de esta clase abstracta y definen bonificaciones específicas, como AldeanoChino y AldeanoFranco.

En resumen, el código simula la recolección de alimentos por parte de aldeanos y pescadores, manteniendo la coherencia a través de interfaces y traits, y permitiendo personalizar el comportamiento de los aldeanos con bonificaciones específicas.
