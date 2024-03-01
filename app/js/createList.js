const usersPerPage = 10;
let currentPage = 1;
let usersData = [];

fetch('./app/data/data.json')
    .then(response => response.json())
    .then(data => {
        const totalUsers = data.length;
        const totalPages = Math.ceil(totalUsers / usersPerPage);
        
        function mostrarUsuariosEnPagina() {
            const initial = (currentPage - 1) * usersPerPage;
            const fin = initial + usersPerPage;
            const usersPage = data.slice(initial, fin);
            
            document.getElementById('data-users').innerHTML = '';

            usersPage.forEach(user => {
                let newRow = document.createElement('tr');

                newRow.innerHTML = `
                    <td>${user.dni}</td>
                    <td>
                        <a href="./app/pages/modifyForm.php?Id=${user.id}">
                            ${user.userName}
                        </a>
                    </td>
                    <td>${user.email}</td>
                    <td>${user.phone}</td>
                    <td>${user.age}</td>
                `;

                document.getElementById('data-users').appendChild(newRow);
            });
        }

        mostrarUsuariosEnPagina();

        function nextPage() {
            if (currentPage < totalPages) {
                currentPage++;
                mostrarUsuariosEnPagina();
            }
        }

        function previousPage() {
            if (currentPage > 1) {
                currentPage--;
                mostrarUsuariosEnPagina();
            }
        }

        document.getElementById('next').addEventListener('click', nextPage);
        document.getElementById('previous').addEventListener('click', previousPage);
    })
    .catch(error => console.error('Error al obtener los datos del archivo JSON', error));