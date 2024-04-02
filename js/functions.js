$(document).ready(function () {
  console.log("Hola jQuery");
  fetchTasks();
  let edit = false;
  if ($("#btnSearch").length) {
    $("#btnSearch").click(function () {
      if ($("#txtSearch").val()) {
        const id = $("#txtSearch").val();
        const action = "searchContact";

        $.ajax({
          url: "search-contacts.php",
          type: "POST",
          async: true,
          data: {
            action: action,
            id: id,
          },
          beforeSend: function () {
            console.log("Enviando información...");
          },
          success: function (res) {
            let template = "";
            try {
              const response = JSON.parse(res);
              console.log(response);

              if (response.error) {
                // Si hay un error, mostrar el mensaje de error
                console.log(response.error);
              } else {
                // Si no hay error, procesar los datos
                response.forEach((user) => {
                  template += `
                     <b>DATOS:</b>
                    <p> 
                        Nombre: ${user.nombre} <br/>
                        Apellido: ${user.apellido} <br/>
                        Email: ${user.email} <br/>
                        Telefono: ${user.telefono}
                    </p>`;
                });

                $("#searchResult").html(template);
              }
            } catch (error) {
              console.log(error);
            }
          },
          error: function (error) {
            console.log(error);
          },
        });
      }
    });
  }

  if ($("#btnAddContact").length) {
    $("#btnAddContact").click(function (e) {
      e.preventDefault();
      $("#btnAddContact").html("Agregar Contacto");

      const userName = $("#nombre").val();
      const userLastname = $("#apellido").val();
      const userEmail = $("#email").val();
      const userPhone = $("#telefono").val();
      const userId = $("#id").val();
      console.log(userId);

      console.log(userName);
      console.log(userLastname);
      console.log(userEmail);
      console.log(userPhone);
      console.log(userId);

      let action = edit === false ? "AddContact" : "updateContact";
      let url = edit === false ? "create-contact.php" : "update-contact.php";

      $.ajax({
        url: url,
        type: "POST",
        async: true,
        data: {
          action: action,
          userName: userName,
          userLastname: userLastname,
          userEmail: userEmail,
          userPhone: userPhone,
          userId: userId,
        },
        beforeSend: function () {
          console.log("Enviando información...");
        },
        success: function () {
          console.log("Usuario creado en la db");
          fetchTasks();
          $("#addForm").trigger("reset");
          edit = false;
        },
        error: function (error) {
          console.error(error);
        },
      });
    });
  }

  $(document).on("click", "#btnUserDelete", function () {
    console.log("hola");
    const element = $(this)[0].parentElement.parentElement;
    console.log(element);
    let id = $(element).attr("userId");
    const action = "deleteContact";
    console.log(id);

    $.ajax({
      url: "delete-contact.php",
      type: "POST",
      async: true,
      data: { id: id, action: action },
      beforeSend: function () {
        console.log("Enviando datos...");
      },
      success: function () {
        console.log("Usuario eliminado correctamente");
        fetchTasks();
      },
      error: function (error) {
        console.error(error);
      },
    });
  });

  $(document).on("click", "#btnUserUpdate", function () {
    console.log("Hola");
    const element = $(this)[0].parentElement.parentElement;
    let id = $(element).attr("userId");
    console.log(id);
    const action = "updateContact";

    $.ajax({
      url: "get-single-contact.php",
      type: "POST",
      async: true,
      data: { id: id, action: action },
      beforeSend: function () {
        console.log("Enviando datos...");
      },
      success: function (res) {
        const user = JSON.parse(res);
        console.log(user);
        $("#nombre").val(user[0].nombre);
        $("#apellido").val(user[0].apellido);
        $("#email").val(user[0].email);
        $("#telefono").val(user[0].telefono);
        $("#id").val(user[0].id);
        console.log(user[0].id);

        edit = true;

        if (edit === true) {
          $("#btnAddContact").html("Actualizar Contacto");
        }

        fetchTasks();
      },
      error: function (error) {
        console.error(error);
      },
    });
    edit = false;
  });

  function fetchTasks() {
    $.ajax({
      url: "get-contacts.php",
      type: "GET",
      success: function (res) {
        const users = JSON.parse(res);
        let template = "";

        users.forEach((user) => {
          template += `
                    
                    <tr userId=${user.id}>
                        <td>${user.id} </td>
                        <td>${user.nombre} </td>
                        <td>${user.apellido} </td>
                        <td>${user.telefono} </td>
                        <td>${user.email} </td>
                        <td><button class="btn btn-danger" id="btnUserDelete">Delete</button>
                        <button class="btn btn-primary" id="btnUserUpdate">Edit</button></td>
                        
                    </tr>
                    `;
        });

        $("#rowsContact").html(template);
      },
    });
  }
});
