<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="shortcut icon" href="./assets/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('dist/assets/compiled/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/compiled/css/iconly.css') }}">
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="justify-content-center d-flex my-5">
                <img src="{{ asset('assets/logo.png') }}" alt="">
            </div>
            <form id="multiple-column-form" class="form" onsubmit="submitForm(event)">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" id="nama" class="form-control" placeholder="Nama"
                                                    name="nama">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" id="username" class="form-control"
                                                    placeholder="Username" name="username">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" id="email" class="form-control" placeholder="Email"
                                                    name="email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-content">
                    <section class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="">
                                        <div class="mb-4 d-flex justify-content-between">
                                            <h4 class="card-title fw-semibold">To Do List</h4>
                                            <button type="button" class="btn border-0 fw-bold border-radius-5"
                                                style="background-color: #ffe2e5; color: #f1416c "
                                                onclick="addTodoForm()"><i class="bi bi-plus fs-4"
                                                    style="color: #f1416c"></i> Tambah To Do</button>
                                        </div>
                                        <div id="todo-forms">
                                            <div class="row todo-form">
                                                <div class="col-md-9 col-12">
                                                    <div class="form-group">
                                                        <label for="todo-1" class="mb-2">Judul To Do</label>
                                                        <input type="text" id="todo-1" class="form-control"
                                                            placeholder="Contoh: Perbaikan api master" name="todo[]">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <div class="form-group">
                                                        <label for="category-1" class="mb-2 form-label">Kategori</label>
                                                        <select name="category[]" id="category-1" class="form-select">
                                                            <option value="" selected disabled>- Select Category -
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 col-12">
                                                    <div class="d-flex justify-content-center align-items-center"
                                                        style="height: 100%;">
                                                        <button type="button" class="btn mt-3 text-white"
                                                            style="background-color: #f1416c;"
                                                            onclick="removeTodoForm(this)"><i
                                                                class="bi bi-trash fs-5"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row todo-form">
                                                <div class="col-md-9 col-12">
                                                    <div class="form-group">
                                                        <label for="todo-1" class="mb-2">Judul To Do</label>
                                                        <input type="text" id="todo-1" class="form-control"
                                                            placeholder="Contoh: Perbaikan api master" name="todo[]">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <div class="form-group">
                                                        <label for="category-1" class="mb-2 form-label">Kategori</label>
                                                        <select name="category[]" id="category-1" class="form-select">
                                                            <option value="" selected disabled>- Select Category -
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 col-12">
                                                    <div class="d-flex justify-content-center align-items-center"
                                                        style="height: 100%;">
                                                        <button type="button" class="btn mt-3 text-white"
                                                            style="background-color: #f1416c;"
                                                            onclick="removeTodoForm(this)"><i
                                                                class="bi bi-trash fs-5"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row todo-form">
                                                <div class="col-md-9 col-12">
                                                    <div class="form-group">
                                                        <label for="todo-1" class="mb-2">Judul To Do</label>
                                                        <input type="text" id="todo-1" class="form-control"
                                                            placeholder="Contoh: Perbaikan api master" name="todo[]">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <div class="form-group">
                                                        <label for="category-1" class="mb-2 form-label">Kategori</label>
                                                        <select name="category[]" id="category-1" class="form-select">
                                                            <option value="" selected disabled>- Select Category -
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 col-12">
                                                    <div class="d-flex justify-content-center align-items-center"
                                                        style="height: 100%;">
                                                        <button type="button" class="btn mt-3 text-white"
                                                            style="background-color: #f1416c;"
                                                            onclick="removeTodoForm(this)"><i
                                                                class="bi bi-trash fs-5"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-100 mt-5">
                                            <button class="btn btn-success w-100 fw-normal fs-5"
                                                type="submit">SIMPAN</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('dist/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('dist/assets/compiled/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            fetchCategory();
        });

        async function submitForm(event) {
            event.preventDefault();
            const form = document.getElementById('multiple-column-form');
            const formData = new FormData(form);
            const todos = Array.from(document.querySelectorAll('.todo-form')).map(form => ({
                description: form.querySelector('input[name="todo[]"]').value,
                category_id: form.querySelector('select[name="category[]"]').value,
            }));
            const data = {
                name: formData.get('nama'),
                username: formData.get('username'),
                email: formData.get('email'),
                todos: todos,
            };

            console.log("test:",data);

            try {
                const response = await axios.post('/api/todo', data);
                console.log(response.data);
                alert('Data berhasil disimpan!');
            } catch (error) {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat menyimpan data.');
            }
        }

        async function fetchCategory() {
            try {
                const response = await axios.get('/api/category');
                const categories = response.data.data;
                const dropdowns = document.querySelectorAll('select[name="category[]"]');
                dropdowns.forEach(dropdown => {
                    for (const category of categories) {
                        const option = document.createElement('option');
                        option.value = category.id;
                        option.text = category.name;
                        dropdown.appendChild(option);
                    }
                });
            } catch (error) {
                console.error('Error:', error);
            }
        }

        function addTodoForm() {
            const formContainer = document.getElementById('todo-forms');
            const todoFormsCount = formContainer.querySelectorAll('.todo-form').length;
            const newTodoForm = document.createElement('div');
            newTodoForm.classList.add('row', 'todo-form');
            newTodoForm.innerHTML = `
                <div class="col-md-9 col-12">
                    <div class="form-group">
                        <label for="todo-${todoFormsCount + 1}" class="mb-2">Judul To Do</label>
                        <input type="text" id="todo-${todoFormsCount + 1}" class="form-control" placeholder="Contoh: Perbaikan api master" name="todo[]">
                    </div>
                </div>
                <div class="col-md-2 col-12">
                    <div class="form-group">
                        <label for="category-${todoFormsCount + 1}" class="mb-2 form-label">Kategori</label>
                        <select name="category[]" id="category-${todoFormsCount + 1}" class="form-select">
                            <option value="" selected disabled>- Select Category -</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-1 col-12">
                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                        <button type="button" class="btn mt-3 text-white" style="background-color: #f1416c;"
                            onclick="removeTodoForm(this)"><i class="bi bi-trash fs-5"></i></button>
                    </div>
                </div>
            `;
            formContainer.appendChild(newTodoForm);
            fetchCategory();
        }

        function removeTodoForm(button) {
            Swal.fire({
                title: 'Apakah Anda yakin hapus?',
                text: "Todo yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#f1416c',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
                }).then((result) => {
                if (result.isConfirmed) {
                    button.closest('.todo-form').remove();
                        Swal.fire(
                        'Dihapus!',
                        'To Do telah dihapus.',
                        'success'
                        )
                    }
            })
        }
    </script>
</body>


</html>