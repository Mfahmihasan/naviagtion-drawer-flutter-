
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <header>
        <h1>Dashboard</h1>
        <p>Selamat datang, !</p>

        <div class="row">
            <div class="col-md-12">
                <button onclick="downloadExcel()" class="btn btn-succes mr-2">
                    <i class="fas fa-download"></i> Unduh Excel
                </button>
                <button onclick="downloadPDF()" class="btn btn-danger">
                    <i class="fas fa-download"></i> Unduh PDF
                </button>
            </div>
        </div>

        <!-- Tambahkan pustaka-pustaka Excel dan PDF -->
        <script src="https://cdn.jsdelivr.net/npm/xlsx/dist/xlsx.full.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>


    </header>

    <nav>
        <ul>
            <!-- Tautan navigasi lainnya -->
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <main>
    <section id="banner">
                    <span class="image object">
                        <img src="images/gbr4.jpeg" alt="" />
                    </span>
                    <div class="content">
                
                      
                    </div>
                </section>


    </main>

     <!-- Footer -->
     <footer id="footer">
        <p class="copyright">&copy; 21552011365_MUHAMAD FAHMI HASAN_KELOMPOK 9_TIFRP221PB_UASWEB1</p>
        
    </footer>
</body>
</html>

<script>
    function downloadExcel() {
        var 

    }

    function downloadPDF() {

    }
</script>
