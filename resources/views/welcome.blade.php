
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>API Documentation</title>

        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- CSS compilado manualmente -->
       <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

          <!-- Js y Boostrap-->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    </head>
    <body>
        
    <aside class="sidebar">
        <a class="sidebar-title-a" href="#top"><h2 class="sidebar-title">API Menu</h2></a>
        <nav class="sidebar-nav">
             <details>
             <summary>Usuario</summary>
             <a href="#u1">Registrarse</a>
             <a href="#u2">Iniciar sesión</a>
             <a href="#u3">Actualizar Datos</a>
             <a href="#u4">Mis Datos</a>
             <a href="#u5">Cerrar Sesión</a>
              
             </details>
    
             <details>
             <summary>Productos</summary>
             <a href="#p1">Lista de Productos</a>
             <a href="#p2">Añadir producto</a>
              <a href="#p3">Buscar Productos</a>
             <a href="#p4">Actualizar producto</a>
             <a href="#p5">Eliminar producto</a>
             </details>

         </nav>
    </aside>



       <section class="title-1">
         <h1>JWT + Laravel(auth) API</h1>
       </section>

      <section class="subtitle-1">
          <div>
        <p>Esta API fue creada con el propósito de poner a prueba la autenticación y seguridad usando JWT,mezclando su comportamiento con el sistema de autenticación tradicional de Laravel(<code>Auth</code>) através de los midellewares.Asi mismo,busca explorar el manejo de roles de usuario, protección de rutas e inicio de sesión. Se esperan futuras actualizaciones para la misma.</p>
        </div>
      </section>



    <a href="https://github.com/AnleDev1/authProject" target="_blank" rel="noopener noreferrer" class="btn-repo">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16" fill="currentColor" style="margin-right: 8px;">
    <path d="M2 2.5A2.5 2.5 0 0 1 4.5 0h8.75a.75.75 0 0 1 .75.75v12.5a.75.75 0 0 1-.75.75h-2.5a.75.75 0 0 1 0-1.5h1.75v-2h-8a1 1 0 0 0-.714 1.7.75.75 0 1 1-1.072 1.05A2.495 2.495 0 0 1 2 11.5Zm10.5-1h-8a1 1 0 0 0-1 1v6.708A2.486 2.486 0 0 1 4.5 9h8ZM5 12.25a.25.25 0 0 1 .25-.25h3.5a.25.25 0 0 1 .25.25v3.25a.25.25 0 0 1-.4.2l-1.45-1.087a.249.249 0 0 0-.3 0L5.4 15.7a.25.25 0 0 1-.4-.2Z"></path>
  </svg>
  Ir al repositorio
</a>
       
<section class="api-docs">
<!--Sección de para la rutas de usuario-->
 <section class="endpoint">         
   <section>
      <h2>Usuario</h2>
        <hr>
          <div>
             <h3 class="subtitle-2" id="u1">Registrarse</h3>
              <p>Crea una cuenta para acceder a los servicios.</p>
      <code class="api-block-post">[POST] https://authproject-production-0a48.up.railway.app/api/register</code>

        <h4 class="title-json">Datos a enviar en [JSON]</h4>
    <pre class="json-block">
         {
           "name":"Nombre Completo",
           "email":"email@gmail.com",
           "password":"12345678910",
           "password_confirmation":"12345678910"        
         }
     </pre>
  <h4 class="title-json">Respuesta esperada [JSON]</h4>                                                                                                
  <pre class="json-block">
         {
           "message": "Usuario registrado correctamente"
         }
          </pre>
          </div>



    <div>
      <h3 class="subtitle-2" id="u2">Iniciar sesión</h3>
      <p>Introduce tus credenciales para ingresar.</p>
      <code class="api-block-post">[POST] https://authproject-production-0a48.up.railway.app/api/login</code>

        <h4 class="title-json">Datos a enviar en [JSON]</h4>
    <pre class="json-block">
        {
           "email":"email@gmail.com",
           "password":"12345678910"
        }
     </pre>
  <h4 class="title-json">Respuesta esperada [JSON]</h4>                                                                                                
  <pre class="json-block">
        {   
           "token ": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3L
           jAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzUwMzU1OTEyLCJleHAiOjE3NTAzNTk1MT
           IsIm5iZiI6MTc1MDM1NTkxMiwianRpIjoiUzk1QzlQTHoxUW5xYTI3aCIsInN1YiI6IjIiLCJ
           wcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.5XQBgF_v
           R8VBAB8N1Jkv1PoCf8BiT4B_1RYJJg-eZe0"
        }
             </pre>
          </div>

     <div>
      <h3 class="subtitle-2" id="u3">Actualizar Datos</h3>
      <p>Modifica la información de tu cuenta </p>
      <code class="api-block-put">[PUT] https://authproject-production-0a48.up.railway.app/api/userUpdate</code>

        <h4 class="title-json">Datos a enviar en [JSON]</h4>
    <pre class="json-block">
        {
           "name" : "Nombre completo actualizado",
           "email":"emailActualizado@gmail.com",
           "password":"12345678910",
           "password_confirmation":"12345678910" 
        }
     </pre>
  <h4 class="title-json">Respuesta esperada [JSON]</h4>                                                                                                
  <pre class="json-block">

        { 
          "message": "User updated"
        }
             </pre>
          </div>

           <div>
      <h3 class="subtitle-2" id="u4">Mis Datos </h3>
      <p>Consulta la información tu cuenta.</p>
      <code class="api-block-get">[GET] https://authproject-production-0a48.up.railway.app/api/me</code>

        <h4 class="title-json">Datos a enviar en [JSON]</h4>
    <pre class="json-block">
     </pre>
  <h4 class="title-json">Respuesta esperada [JSON]</h4>                                                                                                
  <pre class="json-block">
       {
        "id": 2,
        "name": "Nombre completo actualizado",
        "role": "user",
        "email": "emailActualizado@gmail.com",
        "email_verified_at": null,
        "created_at": "2025-06-19T17:54:39.000000Z",
        "updated_at": "2025-06-19T18:06:41.000000Z"   
       }
              </pre>
          </div>
           <div>
      <h3 class="subtitle-2" id="u5">Cerrar Sesión</h3>
      <p>Finaliza la sesión activa del usuario autenticado.</p>
      <code class="api-block-post">[POST] https://authproject-production-0a48.up.railway.app/api/logout</code>

        <h4 class="title-json">Datos a enviar en [JSON]</h4>
    <pre class="json-block">

     </pre>
  <h4 class="title-json">Respuesta esperada [JSON]</h4>                                                                                                
  <pre class="json-block">
  
        {
          "message": "Logged out"
        }
             </pre>
          </div>

        </section>    
   </section>

   <!--Sección de para la rutas de Productos-->
    <section class="endpoint">         
   <section>
      <h2>Productos</h2>
        <hr>

      <div>
      <h3 class="subtitle-2" id="p1">Lista de Productos</h3>
      <p>Explora todos los productos registrados.</p>
      <code class="api-block-get">[GET] https://authproject-production-0a48.up.railway.app/api/products</code>

        <h4 class="title-json">Datos a enviar en [JSON]</h4>
    <pre class="json-block">
        {
        }
     </pre>
  <h4 class="title-json">Respuesta esperada [JSON]</h4>                                                                                                
  <pre class="json-block">
    {   
       "products": [
        {
            "id": 1,
            "name": "Coca-Cola",
            "price": "1.25",
            "created_at": "2025-06-27T17:37:38.000000Z",
            "updated_at": "2025-06-27T17:37:38.000000Z"
        }
                  ]
    }
             </pre>
          </div>

          <div>
             <h3 class="subtitle-2" id="p2">Añadir Productos</h3>
              <p>Agrega nuevos productos para que estén disponibles en el catálogo.</p>
      <code class="api-block-post">[POST] https://authproject-production-0a48.up.railway.app/api/products</code>

        <h4 class="title-json">Datos a enviar en [JSON]</h4>
    <pre class="json-block">
       
        {
              "name": "Coca-Cola",
              "price": 1.25
        }
     </pre>
  <h4 class="title-json">Respuesta esperada [JSON]</h4>                                                                                                
  <pre class="json-block">
    
    {   
         "message":"Producto agregado correctamente"
    }
             </pre>
          </div>



    <div>
      <h3 class="subtitle-2" id="p3">Buscar Productos</h3>
      <p>Busca un producto en específico usando su indetificador único.</p>
      <code class="api-block-get">[GET] https://authproject-production-0a48.up.railway.app/api/products/{id}</code>

        <h4 class="title-json">Datos a enviar en [JSON]</h4>
    <pre class="json-block">
        {
        }
     </pre>
  <h4 class="title-json">Respuesta esperada [JSON]</h4>                                                                                                
  <pre class="json-block">
    {   
        "product": {
        "id": 1,
        "name": "Coca-Cola",
        "price": "1.25",
        "created_at": "2025-06-27T17:37:38.000000Z",
        "updated_at": "2025-06-27T17:37:38.000000Z"
                   }
    }
             </pre>
          </div>

     <div>
      <h3 class="subtitle-2" id="p4">Actualizar Producto</h3>
      <p>Actualiza la información de un producto usando su identificador único.</p>
      <code class="api-block-put">[PATCH] https://authproject-production-0a48.up.railway.app/api/products/{id}</code>

        <h4 class="title-json">Datos a enviar en [JSON]</h4>
    <pre class="json-block">
        {
            "name": "Coca-Cola : Prodcuto Actualizado",
            "price": 1.25
        }
     </pre>
  <h4 class="title-json">Respuesta esperada [JSON]</h4>                                                                                                
  <pre class="json-block">
    {   
         "message": "Producto Actualizado"
    }
             </pre>
          </div>
          
           <div>
      <h3 class="subtitle-2" id="p5">Eliminar Producto</h3>
      <p>Elimina un producto del catálogo usando su identificador único.</p>
      <code class="api-block-delete">[DELETE]https://authproject-production-0a48.up.railway.app/api/products/{id}</code>

        <h4 class="title-json">Datos a enviar en [JSON]</h4>
    <pre class="json-block">
        {
        }
     </pre>
  <h4 class="title-json">Respuesta esperada [JSON]</h4>                                                                                                
  <pre class="json-block">
    {   
    }
             </pre>
          </div>
        </section>    
   </section>

    <section class="endpoint-post">
        <h2>GET</h2>
        <code class="api-block-get">[Get] logout</code>
        <h2>Rutas post</h2>
        <code class="api-block-post">[POST] /api/login</code>
    </section>

    <section class="endpoint-delete">
        <h2>Delete</h2>
        <p>Rutas Delete</p>
        <code class="api-block-delete">[Delete] /api/login</code>
    </section>

    <section class="endpoint-put" id="put">
        <h2>PUT</h2>
        <p>Rutas Delete</p>
        <code class="api-block-put">[Put] /api/login</code>
    </section>   
</section >


        <footer>
            © {{ date('Y') }} - Desarrollado por AnleDev y OwarDev. Todos los derechos reservados. Distruibuido bajo licencia GPL.
        </footer>
    </body>
</html>

