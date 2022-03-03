<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class publicacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titulo=["Componentes del modelo Cliente/Servidor." ,"Programa Maestro", "Explicar los procesos y tareas del programa maestro", "Describir los tipos de servidores.", "Reconocer las características de la arquitectura  Cliente/Servidor", "Identificar las ventajas y desventajas de la arquitectura Cliente/Servidor.", "Definir el concepto de cómputo en la nube.", "Infrastructure as a Service (IAAS), Platform as a Service (PAAS), Software as a Service (SAAS).", "Cliente/Servidor  con los modelos de cómputo en la nube IAAS, PAAS, SAAS.", "Conceptos de presentación distribuida, presentación remota, lógica o proceso distribuido, acceso a datos remotos y bases de datos distribuidas.", "Definir los conceptos de lógica de acceso, presentación y negocio a datos.", "Proceso de diseño de logica de acceso a datos, lógica de presentación de datos y lógica de negocio o lógica de aplicación.", "Proceso de desarrollo de logica de acceso a datos, lógica de presentación de datos y lógica de negocio o lógica de aplicación.", "Concepto de Nivel Vinculado a Programación Web.", "Proceso de Planificación en Dos Niveles.", "Proceso de Planificación en Tres Niveles.", "Proceso de Planificación Multiniveles.", "Problemas de Actualización y Mantenimiento de Aplicaciones Multinivel.", "Comunicación Orientada a Conexión e Interfaz de Programación de Aplicaciones (API).", " Proceso de Comunicación y Configuración Orientada a Conexión e Interfaz de Programación de Aplicaciones", "Concepto de Sockets", "Proceso del Uso de Sockets en Aplicaciones Cliente/Servidor", "Conceptos de modelo, control y vista, en las arquitecturas Cliente/Servidor.", "Concepto del Modelo Vista Controlador (MVC) en las Arquitecturas Cliente/Servidor.", "Proceso de Flujo de Control a partir del MVC, en las Arquitecturas Cliente/Servidor.", "Desarrollo de Software a partir del MVC, en las Arquitecturas Cliente/Servidor."];
        
        $contenido=[
        "<p>El modelo cliente servidor es una tecnologia integrada que distribuye datos e informacion entre multiples procesadores de manera simultanea y en funcion de la necesidad de los clientes, esta relacion esta establecida en funcion del intercambio de mensajes.</p>
        <p>Debido a esta funcion surgen tres elementos los cuales se desarrollan e implantan en este tipo de sistemas los cuales son: el proceso de cliente, el proceso servidor y el middleware. Para entener esto de una mejor manera es inicializar una descomposicion de estos elementos de esta tecnologia con el proposito de conservar los aspectos más funcionales de esta, la descomposicion de divide por niveles:</p>
        
        <ul>
        <li><p>Nivel de Presentacion: Agrupa todos los elementos asociados al componentes del cliente.</p></li>
        <li><p>Nivel de Aplicacion: Agrupa los elementos asociados al componente servidor.</p></li>
        <li><p>Nivel de Comunicacion: Agrupa a todos los elementos que hacen posible la comunicacion entre los componentes cliente y servidor.</p></li>
        <li><p>Nivel de Base de Datos: Agrupa todas las actividades asociadas al acceso de los datos.</p></li>
        <ul>
        
        <h1>Componentes Principales</h1>
        
        <strong><br>Cliente</br></strong>
        <p>Es aquel proceso que permite al usuario formular los requerimientos y pasarlos al servidor, este termino lleva por nombre front-end.</p>
        
        <strong><br>Funciones del Proceso Cliente: </br></strong>

        <p>Administrar la interfaz de usuario. </p>
        <p>Interactuar con el usuario. </p>
        <p>Procesar la lógica de la aplicación y hacer validaciones locales. </p>
        <p>Generar requerimientos de bases de datos.</p>
        <p>Recibir resultados del servidor.</p>
        <p>Formatear resultados.</p>
            
        <strong><br>Clasificaciones del Proceso Cliente</br></strong>

        <p>Cliente Basado en Aplicacion de Usuario: Son aquellos datos de baja interaccioin y que estan fuertemente relacionados con la actividad de los usuarios de esos clientes</p>
        <p>Cliente Basado en la Logica de Negocio: Toma los datos suministrados por el usuario o la base de datos, este afectua los calculos necesarios segun los requerimientos del usuario.</p>



        <strong>Servidor</strong>

        <p>Es el proceso encargado de atender multiples clientes que hacen peticiones de algun recurso administrado por el, a este proceso se le conoce como back-end.</p>

        <strong>Funciones del Proceso Cliente</strong>

        <p>Aceptar los requerimientos de bases de datos que hacen los clientes.</p>
        <p>Procesar requerimientos de bases de datos.</p>
        <p>Formatear datos para trasmitirlos a los clientes.</p>
        <p>Procesar la lógica de la aplicación y realizar validaciones a nivel de bases de datos.</p>


        <strong>Middleware</strong>  

        <p>Middleware es un modulo que intermedio que tiene por funcion ser el conductor entre sistemas permitiendo a cualquier usuario de siste,as de informacion comunicarse con varias fuentes de informacion que se encuentran conectadas por una red. Este permite desarrollar aplicaciones en arquitectura Cliente/Servidor independizando los servidores y clientes, asi facilitando la interrelacion entre ellos.</p>

        <strong>Niveles del Middleware</strong>
        <p>Protocolo de transporte.</p>
        <p>Network Operating System (NOS).</p>
        <p>Protocolo específico del servicio.</p>

        <strong>Caracteristicas del Middleware</strong>
        <p>Simplifica el proceso de desarrollo de aplicaciones al independizar los entornos propietarios.</p>
        <p>Permite la interconectividad de los Sistemas de Información del Organismo.</p>
        <p>Proporciona mayor control del negocio al poder contar con información procedente de distintas plataformas sobre el mismo soporte.</p>
        <p>Facilita el desarrollo de sistemas complejos con diferentes tecnologías y arquitecturas.</p>", 
        
        
        
        "Tambien conocido como servidor ofrece un servicio que se puede obtener en una red. Acepta la petición desde la red, realiza el servicio y devuelve el resultado al solicitante. Al ser posible implantarlo como aplicaciones de programas, puede ejecutarse en cualquier sistema donde exista TCP/IP y junto con otros programas de aplicación. 
        <p>El servidor comienza su ejecución antes de comenzar la interacción con el cliente. Su tiempo de vida o de interacción es “interminable”.</p>
        <p>Los servidores pueden ejecutar tareas sencillas (caso del servidor hora día que devuelve una respuesta) o complejas (caso del servidor ftp en el cual se deben realizar operaciones antes de devolver una respuesta).</p>
        <p>Los servidores sencillos procesan una petición a la vez (son secuenciales o interactivos), por lo que no revisan si ha llegado otra petición antes de enviar la respuesta de la anterior.</p>
        <p>Los más complejos trabajan con peticiones concurrentes aún cuando una sola petición lleve mucho tiempo para ser servida (caso del servidor ftp que debe copiar un archivo en otra máquina). Son complejos pues tienen altos requerimientos de protección y autorización.</p>
        
        <br><strong>Partes de los Servidores</strong></br>
        </p>Programa o proceso que es responsable de aceptar nuevas peticiones: Maestro o Padre.</p>
        </p> Programas o procesos que deben manejar las peticiones individuales: Esclavos o Hijos.</p>
        ", 
        
        
        "<p>El programa “Maestro” tiene diferentes tareas, entre ellas están el abrir un puerto para que puedan acceder los clientes, esperar y aceptar las peticiones de los clientes, iniciar un programa “Esclavo” para realizar su petición.</p>

        <p><strong>Tareas Especificas del Programa Maestro</strong></p>
        <p>Abrir un puerto local bien conocido al cual pueda acceder los clientes.</p>
        <p>Esperar las peticiones de los clientes.</p>
        <p>Elegir un puerto local para las peticiones que llegan en informar al cliente del nuevo puerto, (innecesario en la mayoría de los casos).</p>
        <p>Iniciar un programa esclavo o proceso hijo que atienda la petición en el puerto local, (el esclavo cuando termina de manejar una petición no se queda esperando por otras).</p>
        <p>Volver a la espera de peticiones mientras los esclavos, en forma concurrente, se ocupan de las anteriores peticiones.<p>", 
        
        
        
        "<p>El servidor es una entidad fisica que provee un servicio y devuelve resultados: ejecuta el procesamiento de datos, aplicaciones y manejo de informacion o recursos, el servidor permite gestionar la disponibilidad y la seguridad de los datos.</p>

        <p>Los distintos sistemas con diferentes arquitecturas se les ha denominado Cliente/Servidorm estos son clasificados basandose en su funcionalidad.</p>
        
        <p><strong>Servidores de Ficheros</strong></p>
        <p>El cliente formula peticiones de registros a traves de una red al servidor de ficheros</p>
        
        <p><strong>Servidores de Bases de Datos</strong></p>
        <p>El cliente formula peticiones SQL al servidor de BD, de interes para los casos en los que se requieren preguntas ad-hoc</p>
        
        <p><strong>Servidores de Transcciones</strong>
        <p>El cliente hace procedimientos que residen en el servidor, dichos procediminetos ejecutan un conjunto de sentencias SQL</p>
        
        <p><strong>Servidores de Objetos</strong></p>
        <p>Los objetos clientes se comunican con los objetos servidores usando ORB. El cliente invoca un metodo de objeto remoto mientras que el ORB localiza una instancia de esa clase de servidor de objetos, invoca el  metodo solicitado y envia los resultados a los objetos clientes.</p>
        
        <p><strong>Servidores de Web</strong></p>
        <p>La web es la primera aplicacion cliente servidor y consta de clientes universales que se comunican con grandes servidores, estos se ponen en contacto por medio del protocolo HTTP.</p>
        ", 
        
        
        "<p><strong>Caracteristicas de la arquitectura Cliente/Servidor</strong></p>

        <p>El servidor presenta a todos sus clientes una interfaz unica y bien definida</p>
        <p>El cliente no necesita conocer la logica del servidor, solo su interfaz externa</p>
        <p>El cliente no depende de la ubicacion fisica del servidor ni del tipo de equipo fisica en el que se encuentra ni de su sistema operativo</p>
        <p>Los cambios en el servidor implican pocos o ningun cambio en el cliente</p>
        
        <p><strong>Servicio</strong></p>
        <p>Se trata principalmente de una relacion entre procesos en maquinas diferentes. El proceso servidor proporciona servicios, el cliente consume servicios. Este mecanismo proporciona una preparacion clara de funciones basas en la idea de servicio.</p>
        
        <p><strong>Recursos Compartidos</strong></p>
        <p>Un servidor puede atender muchos clientes al mismo tiempo y regular sus accesos a los recursos compartidos.</p>
        
        <p><strong>Protocolos Asimetricos</strong></p>
        <p>Hay una relacion 1 a n entre el servidor y los clientes, los clientes siempre inicial el dialogo pidiendo servicios, los servidores esperan pasivamente las peticiones de los clientes.</p>
        
        <p><strong>Transparencia de la Localizacion</strong></p>
        <p>El servidor es un proceso que puede residir en la misma maquina que los clientes en una maquina diferente a una red. El software cliente/servidor oculta la localizacion del servidor a los clientes, redirigiendo las llamadas a los servidores cuando sea necesario.</p>
        
        <p><strong>Independencia</strong></p>
        <p>El softwre cliente/servidor ideal es independiente del hardware y del sistema operativo.</p>
        
        <p><strong>Comunicacion de Mensajes</strong></p>
        <p>Los clientes y servidores interactuan utilizando un mecanismo de paso de mensajes, el mensaje es el soporte para las peticiones de servicios y las respuestas.</p>
        
        
        <p><strong>Encapsulacion de Servicios</strong></p>
        <p>El servidor es un especialista, un mensaje le dice al servidor que servicio se solicita, es la tarea del servidor determinar como realizar el trabajo, los servidores se puede actualizar sin afectar a los clientes siempre y cuando no se modifique su interfaz.</p>
        
        <p><strong>Escabilidad</strong></p>
        <p>Los sistemas cliente/servidor se pueden escalar horizontal y verticalmente.</p>
        <p>Horizontalmente significa añadir o eliminar clientes mientras que verticalmente significa migrar a maquinas servidores más potentes o multiservidores.</p>
        
        <p><strong>Integridad</strong></p>
        <p>El codigo y los datos del servidor se mantienen centralizados con lo que es menos costoso su mantenimiento y controlar la integridad de los datos compartidos.<p>", 
        
        "<p><strong>Ventajas de la Arquitectura Cliente/Servidor</strong></p>

        <p>Se pueden usar componentes software/hardware de varios fabricantes, contribuye a la reducción de costos.</p>
        <p>Facilita la integración entres sistemas distintos y comparte información (Puede integrar varias PCs sin que tenga el mismo sistema operativo).</p>
        <p>Es más rápido el mantenimiento y desarrollo de aplicaciones (SQL, sockets, RPC).</p>
        <p>Contribuye a proporcionar a los diferentes departamentos de una organización, soluciones locales. Pero permitiendo la integración de la información relevante a nivel global.</p>
        
        <p><strong>Desventajas de la Arquitectura Cliente/Servidor</strong></p>
        
        <p>El mantenimiento de los sistemas es más difícil pues implica los distintos componentes de software y hardware distribuidos por distintos proveedores, es difícil detectar las fallas.</p>
        <p>Escasas herramientas de administración.</p>
        <p>Los clientes y servidores deben usar el mimo mecanismo (sockets, RPC), por lo tanto, deben tener mecanismos generales en distintas plataformas.</p>
        <p>En el aspecto de la seguridad se deben hacer verificaciones en el cliente y el servidor.</p>
        <p>El desempeño puede disminuir por congestión de red y el tráfico de datos.</p>", 
    
    "<p><strong>Computo en la Nube</strong></p>
    <p>La computación en la nube (o cloud computing, en inglés) es una tecnología que permite acceder remotamente, de cualquier lugar del mundo y en cualquier momento, a softwares, almacenamiento de archivos y procesamiento de datos a través de Internet, sin la necesidad de conectarse a un ordenador personal o servidor local.</p>
    <p>La computación en nube ofrece a las empresas modelos prácticos para acceder a las ofertas de infraestructura, plataforma y software de pago por uso. Con la computación en nube, las empresas pueden liberar capital, optimizar el mantenimiento de TI, modernizar y escalar los enfoques empresariales, convertir la seguridad y la flexibilidad en servicios y soluciones, ayudar a los clientes de nuevas maneras, y hacer crecer su empresa en las condiciones de mercado siempre cambiantes.</p>
    
    
    <p><strong>Tipos de Nubes</strong></p>
    
    <p><strong>Nube Privada</strong></p>
    <p>El modelo de nube privada hace referencia a los recursos de computación en nube que se usan exclusivamente en una misma empresa u organización. La nube privada puede almacenarse en el centro de datos interno o un proveedor de servicios puede alojarla en la nube.</p>
    
    <p><strong>Nube Publica</strong></p>
    <p>Cuando una organización implementa un modelo de nube pública, toda la infraestructura de hardware, software y soporte es propiedad del proveedor de servicios que la administra y la proporciona exclusivamente por Internet. Puede acceder a estos servicios y administrar la cuenta mediante un navegador web.</p>
    
    <p><strong>Nube Hibrida</strong></p>
    <p>Un modelo de computación en nube híbrido combina las nubes públicas y privadas para compartir datos y aplicaciones. Las nubes híbridas conectan la infraestructura y las aplicaciones entre recursos en nube con los recursos existentes que no se encuentran en la nube. Este enfoque le aporta a su empresa más flexibilidad y más opciones de implementación.</p>", 


"<p><strong>Infrastructure as a Service (IAAS)</strong></p>
<p>Piense en IaaS como si fueran los componentes de la TI basada en la nube. En este modelo, un proveedor de nube aloja los componentes de infraestructura que tradicionalmente se almacenan en centros de datos internos. Por ejemplo, el hardware de servidores, almacenamiento y redes, junto con el hipervisor (capa de virtualización), suelen alojarse en las instalaciones. Con IaaS, su organización puede elegir cuándo y cómo desean administrar las cargas de trabajo sin necesidad de comprar, administrar y respaldar la infraestructura subyacente. IaaS permite que la infraestructura esté en funcionamiento rápidamente, con un modelo de pago por uso.</p>


<p><strong>Platform as a Service (PASS)</strong></p>
<p>PaaS se suma al modelo de IaaS, pero suele ser algo específico de las herramientas de hardware y software para el desarrollo de aplicaciones. Además de proporcionar componentes de infraestructura, los proveedores de nube también alojan y administran sistemas operativos y middleware que los desarrolladores necesitan para crear y ejecutar aplicaciones. PaaS ofrece un modelo a petición de pago por uso.</p>


<p><strong>Software as a Service (SAAS)</strong></p>
<p>Con SaaS, los proveedores de nube alojan y administran toda la infraestructura, además de las aplicaciones para usuarios finales. Cuando su empresa elige un modelo de SaaS, no necesita instalar nada; los usuarios podrán iniciar sesión y comenzar a usar de inmediato la aplicación del proveedor de nube que se ejecuta en la infraestructura. SaaS lo libera para que pueda dedicarse únicamente a pensar en cómo usará su empresa dicho software, en vez de pensar en cómo mantenerlo. SaaS está disponible a petición o por suscripción.<p>

", 

"<p><strong>IAAS</strong></p>
<p>El enfoque tradicional para el hospedaje de aplicaciones requiere la compra de hardware y la administración de todas las instalaciones de software, incluido el sistema operativo. Originalmente, esto implicaba centros de datos y hardware físico costosos. Los desafíos que implica el hardware físico operativo son muchos, entre los que se incluyen:</p>

<p>La necesidad de comprar en exceso o para escenarios de demanda máxima.</p>
<p>Protección del acceso físico al hardware.</p>
<p>Responsabilidad por el error de hardware (por ejemplo, un error de disco).</p>
<p>Refrigeración.</p>
<p>Configuración de enrutadores y equilibradores de carga.</p>
<p>Redundancia energética.</p>
<p>Protección del acceso a software.</p>


<p><strong>PAAS</strong></p>
<p>Plataforma como servicio (PaaS) ofrece soluciones configuradas que los desarrolladores pueden conectar directamente. PaaS es otro término para el hospedaje administrado. Elimina la necesidad de administrar el sistema operativo base, las revisiones de seguridad y, en muchos casos, las dependencias de terceros. Entre los ejemplos de plataformas se incluyen las aplicaciones web, las bases de datos y los back-ends móviles.
PaaS aborda los desafíos comunes a IaaS. PaaS permite que el desarrollador se centre en el código o el esquema de la base de datos en lugar de cómo se implementa. Entre las ventajas de PaaS se incluyen:
Modelos de pago por uso que eliminan el recargo de invertir en máquinas inactivas.
Implementación directa y mejoras de canalizaciones de integración continua (CI), entrega continua (CD) y DevOps.
Revisiones de seguridad y actualizaciones automáticas.
Escalado horizontal y escalado vertical (escala elástica) con botón de comando.</p>


<p><strong>SAAS</strong></p>
<p>El software como servicio o SaaS se hospeda de manera centralizada y está disponible sin necesidad de aprovisionamiento o instalación local. A menudo, SaaS se hospeda en PaaS como plataforma para la implementación de software. SaaS proporciona servicios para ejecutar y conectarse con software existente. SaaS suele ser vertical y específica del sector. SaaS suele tener licencia y habitualmente proporciona un modelo cliente/servidor. La mayoría de las ofertas de SaaS modernas usan aplicaciones basadas en la Web para el cliente. Las empresas suelen considerar SaaS como una solución empresarial para las ofertas de licencias. Por lo general, no se implementa como consideración de arquitectura para la escalabilidad y el mantenimiento de una aplicación. En realidad, la mayoría de las soluciones de SaaS se basan en IaaS, PaaS o back-ends sin servidor.</p>
",


"<p><strong>Presentacion Distribuida</strong></p>
<p>El cliente asuma parte de las funciones de presentacion de la aplicacion, ya que siguen existiendo programas en el servidor dedicados de esta tarea, el resto de funciones de la aplicacion residen en el servidor.</p>

<p><strong>Presentacion Remota</strong></p>
<p>Toda logica del negocio y acceso a los datos se ejecuta en el servidor, estas funciones de presentacion son ejecutadas en el cliente.</p>

<p><strong>Logica o Proceso Distribuido</strong></p>
<p>La logica de los procesos se divide entre los distintos componentes del cliente y del servidor, el diseñador de la aplicacion debe definir los servicios y las interfaces del sistema de informacion de forna que los papeles de cliente servidor sean intercambiables.</p>

<p><strong>Acceso a Datos Remoto</strong></p>
<p>El cliente realiza tanto las funciones de presentacion como los procesos, el servidor almacena y gestiona los datos que permanecen en una base de datos centralizada.</p>

<p><strong>Bases de Datos Distribuidas</strong></p>
<p>El gestor de base de datos divide sus componentes entre el cliente y el servidor, las interfaces entre ambos estan dentro de las funciones del gestor de datos y no tiene impacto en el desarrollo de las aplicaciones.</p>",

"<p><strong>Logica de Acceso</strong></p>
<p>El control de acceso lógico es la principal línea de defensa para la mayoría de los sistemas, permitiendo prevenir el ingreso de personas no autorizadas a su información. Para controlar el acceso se emplean 2 procesos: identificación y autenticación. Se denomina identificación al momento en que el usuario se da a conocer en el sistema; y autenticación a la verificación que realiza el sistema sobre esa identificación.</p>

<p><strong>Presentacion</strong></p>
<p>El proceso cliente/servidor no es una moda pasajera, sino que constituye un cambio fundamental en el sector informático y garantiza que no se está volviendo a las formas antiguas en la actividad comercial. Los mainframes han adquirido una nueva forma como servidores de empresa y las estaciones de trabajo se utilizan como puertas de entrada al universo en expansión de los servicios basados en red.</p>

<p><strong>Negocio de Datos</strong></p>
<p>El proceso cliente/servidor no es una moda pasajera, sino que constituye un cambio fundamental en el sector informático y garantiza que no se está volviendo a las formas antiguas en la actividad comercial. Los mainframes han adquirido una nueva forma como servidores de empresa y las estaciones de trabajo se utilizan como puertas de entrada al universo en expansión de los servicios basados en red.</p>",

"<p>Han habido tendencias que son de gran importancia y que han cambiado el como se desarrollan las aplicaciones.</p>
<p>Esto remonta a el como se construían las bases de datos desde hace 10 años, siendo construidos por un monolito alrededor de un sistema de gestión de base de datos relacional, estos ahora deben conectarse con otros sistemas los cuales producen datos y consumen datos desde una gran cantidad de fuentes de datos, ahora por la evolución de las tecnologías se introducen nuevos métodos y requisitos de consistencia y coordinación, esto aplica desde la generación de informes de los datos, hasta la minería de datos, análisis y sincronizar, haciendo esto una manera común de acceso de datos.</p>


<p><strong>Lógica de presentación de Datos</strong></p>
<p>Comúnmente las empresas manejan una gran cantidad de datos, lo cual deben buscar una manera para poder almacenarlos, la manera mas sencilla para almacenarlos es usando una base de datos, un paso fundamental para |poder tener una base de datos organizada es  la presentación de datos, técnicamente la logica de datos  es un proceso de documentar un diseño de un sistema de software complejo, es como un mapa para la cpnstruccion de un software creado o para poder modificar la aplicacion antigua.</p>
 
<p><strong>Lógica de negocio</strong></p> 
<p>En una aplicación  el usuario se comunica con el sistema por medio de una interfaz, pero cuando este funciona, la interfaz para hacer una acción se activan una serie de procesos que se conocen como la lógica de negocio.</p>",

"<p><strong>Proceso de Diseño de Lógica de Acceso de Datos</strong></p>
<p>El diseño de una base de datos es un proceso que se guía por varios principios bien definidos, partiendo de un dominio del cual se obtendrá un modelo conceptual, seguidamente un modelo lógico, al cual se le debe aplicar normalización y finalmente obtener un modelo físico y poder implementarlo.</p>

<p><strong>Lógica de aplicación</p></strong> 
<p>Las aplicaciones cliente/servidor normalmente distribuyen los componentes de la aplicación de forma que la base de datos reside en el servidor, el interfaz de usuario reside en el cliente, y la lógica de negocio puede residir tanto en el cliente, como en el servidor.</p>

<p><strong>Proceso de desarrollo de lógica de acceso a datos</strong></p>
<p>Previamente a la fase de diseño lógico, se debe elegir un tipo de base de datos. Es decir, no hay que escoger todavía un SGBD concreto, sino que simplemente hay que seleccionar el tipo de base de datos que se quiere implementar. Es importante que quede claro que el tipo de base de datos determina el esquema de diseño lógico. Una vez elegido el tipo de SGBD donde se quiere implementar la base de datos, ya se puede iniciar la fase del diseño lógico.</p> 

<p><strong>Proceso de desarrollo de lógica de aplicación</strong></p>
<p>Estos procesos gestionan la lógica empresarial de la aplicación y pueden acceder a los servicios de tercer nivel. La capa lógica de la aplicación es donde se produce la mayor parte del trabajo de proceso. Varios componentes de cliente pueden acceder simultáneamente a los procesos de segundo nivel, por lo que esta capa lógica de aplicación debe gestionar sus propias transacciones.</p>",

"<p>Desarrollo web significa construir y mantener sitios web; es el trabajo que tiene lugar en un segundo plano y que permite que una web tenga una apariencia impecable, un funcionamiento rápido y un buen desempeño para permitir la mejor experiencia de usuario. Los desarrolladores web son como duendes con poderes: nunca los ves, pero son los que hacen que todo esté bien y funcione de manera rápida y eficiente.</p>",

"<p><strong>Proceso de planificación en dos niveles</strong></p> 
<p>El esquema operativo de un planificador de dos niveles es como sigue:</p>
<p>Los criterios que podría utilizar el planificador de nivel superior para tomar sus decisiones son los que se indican a continuación:</p>
<p>1. Se carga en la memoria principal cierto subconjunto de los procesos ejecutables.</p>
<p>2. El planificador se restringe a ellos durante cierto tiempo.</p>",

"<p><strong>Proceso de Planificación en Tres Niveles</strong></p> 
<p>Los tres niveles deben comunicarse entre sí. Abiertos, los protocolos estándar y las API expuestas simplifican esta comunicación. Puede escribir componentes de cliente en cualquier lenguaje de programación, como por ejemplo Java o C++. Estos clientes se ejecutan en cualquier sistema operativo, hablando con la capa lógica de la aplicación. Las bases de datos del tercer nivel pueden ser de cualquier diseño, si la capa de aplicación puede consultarlas y manipularlas. La clave de esta arquitectura es la capa lógica de la aplicación.</p>", 

"<p><strong>Proceso de la Planificación Multiniveles</strong></p> 
<p>La Planificación de procesos en Minix se hace mediante colas multinivel sin realimentación, habiendo un total de tres colas. La Cola de mayor prioridad se encarga de las tareas (TASK_Q), la siguiente en prioridad, se hace cargo de los servidores (SERVER_Q) y por último, la de menor prioridad, gestiona los procesos de usuario (USER_Q). Dentro de los niveles de tareas y servidores los procesos se ejecutan hasta que se bloquean.</p>",

"<p><strong>Identificar problemas de actualización</strong></p>
<p>Para identificar y resolver problemas relacionados con WSIF, puede utilizar los recursos estándar de WebSphere Application Server rastreo y registro . Si encuentra un problema que cree que podría estar relacionado con WSIF, puede comprobar si hay mensajes de error en la consola administrativa de WebSphere Application Server y en el archivo stdout.log del servidor de aplicaciones.</p>
<p>También puede habilitar el rastreo de depuración del servidor de aplicaciones para proporcionar un vuelco de excepciones detallado. Una lista de los mensajes del sistema de tiempo de ejecución WSIF, con detalles de lo que significa cada mensaje, se proporciona en Mensajes WSIF (Web Services Invocation Framework). Una lista de las principales restricciones conocidas que se aplican al utilizar WSIF se proporciona en WSIF-Restricciones conocidas.</p>

<p><strong>Mantenimiento Multinivel</strong></p>
<p>La aplicación reside en el cliente mientras que la base de datos se encuentra en el servidor. En este tipo de aplicaciones el peso del cálculo recae en el cliente, mientras que el servidor hace la parte menos pesada, y eso que los clientes suelen ser máquinas menos potentes que los servidores. Además, está el problema de la actualización y el mantenimiento de las aplicaciones, ya que las modificaciones a la misma han de ser trasladada a todos los clientes.</p>
<p>Para solucionar estos problemas se ha desarrollado el concepto de arquitecturas de tres niveles: interfaz de presentación, lógica de la aplicación y los datos. La capa intermedia es el código que el usuario invoca para recuperar los datos deseados. La capa de presentación recibe los datos y los formatea para mostrarlos adecuadamente. Esta división entre la capa de presentación y la de la lógica permite una gran flexibilidad a la hora de construir aplicaciones, ya que se pueden tener múltiples interfaces sin cambiar la lógica de la aplicación.</p>",


"<p>La comunicación orientada a la conexión es un modo de comunicación de red en telecomunicaciones y redes de computadoras, donde es interpone una sesión donde se hace una sesión de comunicación o una conexión antes de que se pueda enviar un dato que pueda ser de utilidad, lo cual hace que sea capaz de brindar que los datos se entreguen en el orden a la capa superior en términos de la comunicación</p>

<p><strong>API</strong></p>
<p>Se trata de un conjunto de definiciones y protocolos que se usan para crear e implementar el software de las aplicaciones, haciendo que se puedan compartir los datos desde el software, usando un conjunto de reglas, técnicamente se establece una conexión, se comunica o interactua con otro para cumplir un objetivo determinado</p>",


"<p>El proceso de la comunicación orientada a la conexión es una forma de comunicación de datos que requiere una sobrecarga que tiene como uso la configuración de una solicitud de una conexión para que antes de enviarse algún mensaje de comunicación de datos, la mayoría de los protocolos de redes que requieren un modo orientado a la conexión, esto con la diferencia de que no haya una perdida de paquetes.</p>

<p>Con el mantenimiento de paquetes hará que se pueda enviar una gran cantidad de datos, estos como si fueran paquetes por medio del Internet hacia un destino.</p>

<p><strong>Interfaz de programacion de aplicacion (API)</strong><p>
<p>Es un conjunto de rutas, subrutinas y funciones que ayudan a cumplir procedimientos que ofrecen cierta biblioteca para que sea utilizado por un software ageno que sea usado como una capa de abstraccion, estas son sadas de manera muy comun en las bibliotecas de programación</p>",

"<p>Los sockets son un mecanismo que tiene como finalidad establecer un enlace entre 2 programas que se ejecutan de manera independiente del uno al otro (tecnicamente un programa cliente y otro programa servidor)</p>
<p>Esto para poder implemetnar una conexion desde el lado del cliente y el uso del server  socket que permitira manipular la conexion desde el lado del servidor y poder enviar informacion o datos que el usuario requiera del servidor. </p>",


"<p>La comunicacion entre procesos atraves de sockets se basa en el estandar cliente/servidor, el proceso en la comunicacion actua como un proceso del servidor haciendo que este cree un socket cual nombre sed conoce como, proceso del cliente, el caul tendra la capacidad de interactuar con el proceso del servidor</p> 
<p>Primero el proceso servidor crear un socket con nombre y espera la conexion, despues el proceso del cliente crea un socket y hace una peticion de conexion al socket servidor, el cliente hace la conexion a traves de su socket mientras el proceso mantiene el socket servidor original con el nombre.</p>
<p>Cuando un cliente conecta con el servidor se crea un nuevo socket, de esta forma, el servidor puede seguir esperando conexiones en el socket principal y comunicarse con el cliente conectado, de igual manera se establece un socket en el cliente en un puerto local. </p>
<p>Una aplicación servidor normalmente escucha por un puerto específico esperando una petición de conexión de un cliente, una vez que se recibe, el cliente y el servidor se conectan de forma que les sea posible comunicarse entre ambos. Durante este proceso, el cliente es asignado a un número de puerto, mediante el cual envía peticiones al servidor y recibe de este las respuestas correspondientes.</p>
<p>Similarmente, el servidor obtiene un nuevo número de puerto local que le servirá para poder continuar escuchando cada petición de conexión del puerto original. De igual forma une un socket a este puerto local.</p>
",


"<pr><strong>Concepto de modelo</strong><p>
<p>Los modelos son uno de los componentes principales de las aplicaciones desarrolladas bajo el patrón MVC, que tienen la responsabilidad de acceder a los datos, modificarlos, etc. En el patrón además los modelos mantienen lo que se llama la lógica de negocio, que son las reglas que deben cumplirse para trabajar con los datos.</p>
<p>Por tanto, el tipo de acciones que le vamos a solicitar a un modelo es, por ejemplo, obtener datos, insertarlos, modificarlos, etc. En las operaciones que modifiquen los datos además se tendrá que realizar cierta validación de esos datos, para asegurarnos que tienen la forma que es necesaria antes de guardarlos.</p>


<p><strong>Concepto de controlador</strong><p> 
<p>Aunque suponemos que todos los lectores deben tener unas nociones básicas generales sobre el concepto de controlador, cabe aclarar que éstos son una de las piezas que, junto con los modelos y las vistas, forman parte del patrón MVC. En Laravel, como en cualquier otro de los frameworks PHP populares, son una importante parte de las aplicaciones. Su función es la de definir el código a ejecutar como comportamiento frente a una acción solicitada dentro de la aplicación.</p>


<p><strong>Concepto de vista</strong></p> 
<p>Como decíamos, la mayoría seguro entenderá este concepto, no obstante, vamos a exponerlo rápidamente para aquel que no sepa de qué estamos hablando. Las vistas son una de las capas que tiene el sistema MVC, que trata de la separación del código según sus responsabilidades. En este caso, las vistas mantienen el código de lo que sería la capa de presentación.</p> 
<p>Como capa de presentación, las vistas se encargan de realizar la salida de la aplicación que generalmente en el caso de PHP será código HTML. Por tanto, una vista será un archivo PHP que contendrá mayoritariamente código HTML, que se enviará al navegador para que éste renderice la salida para el usuario.</p> 
",

"<p> MVC (modelo, vista, controlador) es un patrón arquitectónico de software que separa una aplicación en tres capas descritas como su acrónimo lo indica. Laravel, así como la mayoría de frameworks en PHP implementan este patrón de diseño en donde cada capa maneja un aspecto de la aplicación. </p>
<p><strong>Modelo</strong></p> 
<p>Hace referencia a la estructura de datos de la aplicación. Los datos pueden ser transferidos desde la base de datos, una clase, un servicio, u otros, directamente a la vista o ser transformados en el controlador para ser actualizados nuevamente al origen.</p>

<p><strong>Vista</strong></p>
<p>Es la representación de la información en una interfaz de usuario. Por lo general en interfaces no estáticas se representan los datos que vienen directamente del modelo o estos son transformados en un proceso intermedio en el controlador.</p>

<p><strong>Controlador</strong></p>
<p>Es el lugar en donde se implementa la lógica de la aplicación, los procedimientos, algoritmos y rutinas que hacen que funcione el software.<p>
",

"<p>El usuario interactúa con la interfaz de usuario de alguna forma (por ejemplo, el usuario pulsa un botón, enlace, etc.), mientras que el controlador recibe (por parte de los objetos de la interfaz-vista) la notificación de la acción solicitada por el usuario. El controlador gestiona el evento que llega, frecuentemente a través de un gestor de eventos (handler) o callback.</p>
<p>El controlador accede al modelo, actualizándolo, posiblemente modificándolo de forma adecuada a la acción solicitada por el usuario (por ejemplo, el controlador actualiza el carro de la compra del usuario). Los controladores complejos están a menudo estructurados usando un patrón de comando que encapsula las acciones y simplifica su extensión.</p>
<p>El controlador delega a los objetos de la vista la tarea de desplegar la interfaz de usuario. La vista obtiene sus datos del modelo para generar la interfaz apropiada para el usuario donde se refleja los cambios en el modelo (por ejemplo, produce un listado del contenido del carro de la compra). El modelo no debe tener conocimiento directo sobre la vista. Sin embargo, se podría utilizar el patrón Observador para proveer cierta indirección entre el modelo y la vista, permitiendo al modelo notificar a los interesados de cualquier cambio. Un objeto vista puede registrarse con el modelo y esperar a los cambios, pero aun así el modelo en sí mismo sigue sin saber nada de la vista. El controlador no pasa objetos de dominio (el modelo) a la vista, aunque puede dar la orden a la vista para que se actualice.</p>" ,

"<p>Modelo Vista Controlador (MVC) es un estilo de arquitectura de software que separa los datos de una aplicación, la interfaz de usuario, y la lógica de control en tres componentes distintos.</p>
 <p>El Modelo que contiene una representación de los datos que maneja el sistema, su lógica de negocio, y sus mecanismos de persistencia, la Vista, o interfaz de usuario, que compone la información que se envía al cliente y los mecanismos interacción con éste y el Controlador, que actúa como intermediario entre el Modelo y la Vista, gestionando el flujo de información entre ellos y las transformaciones para adaptar los datos a las necesidades de cada uno.</p>"

];


        for ($x=0; $x<26; $x++)
        {
            DB::table('publicaciones_table')->insert([

                'titulo'=>$titulo[$x],

                'contenido'=>$contenido[$x],

                'created_at'=>date('Y-m-d H:i:s'),

                'updated_at'=>date('Y-m-d H:i:s'),

            ]);
        }

    }
}
