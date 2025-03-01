
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System - Enhanced</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .animate-fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .book-card {
            transition: transform 0.3s ease;
        }

        .book-card:hover {
            transform: translateY(-5px);
        }
    </style>
    <style>
        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }

            100% {
                background-position: 1000px 0;
            }
        }

        .loading {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 1000px 100%;
            animation: shimmer 2s infinite linear;
        }
    </style>
</head>

<body class="bg-gray-50">

    <!-- Navigation (Enhanced with dropdown) -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex-shrink-0 flex items-center">
                    <h1 class="text-xl font-bold text-gray-800"><a href="index.html">📚 LibrarySystem</a></h1>
                </div>
                <div class="hidden sm:flex sm:space-x-4 items-center">
                    <button
                        class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300"><a
                            href="login.html">Login</a></button>
                    <button
                        class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition duration-300"><a
                            href="register.html">Register</a></button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Modified Hero Section with Image Background -->
    <div class="relative">
        <div class="absolute inset-0">
            <img src="https://www.edigitallibrary.com/img/library-img.jpg" alt="Library Background"
                class="w-full h-[600px] object-cover filter brightness-40">
        </div>
        <div class="relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
                <div class="text-center">
                    <h2 class="text-4xl font-extrabold sm:text-5xl mb-4 text-white">
                        Your Gateway to Knowledge
                    </h2>
                    <p class="text-xl text-gray-200 mb-8">
                        Discover millions of books, articles, and resources at your fingertips.
                    </p>
                    <div class="max-w-3xl mx-auto">
                        <div class="bg-white rounded-lg p-4 shadow-lg">
                            <div class="flex flex-wrap gap-4">
                                <input type="text" id="search"
                                    class="flex-1 p-3 border rounded-lg focus:ring-2 focus:ring-blue-500 text-gray-800"
                                    placeholder="Search by title, author, or ISBN...">
                                <select id="categoryFilter"
                                    class="p-3 border rounded-lg text-gray-800 w-full md:w-auto">
                                    <option value="all">All Categories</option>
                                    <option value="fiction">Fiction</option>
                                    <option value="non-fiction">Non-Fiction</option>
                                    <option value="academic">Academic</option>
                                </select>
                                <button id="searchBtn"
                                    class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300 w-full md:w-auto">
                                    Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- How It Works Section -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-3xl font-bold text-center text-gray-900 mb-12">How It Works</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-search text-2xl text-blue-600"></i>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Search</h4>
                    <p class="text-gray-600">Browse our vast collection of books and resources</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-book-reader text-2xl text-blue-600"></i>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Borrow</h4>
                    <p class="text-gray-600">Check out books with your library card</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heart text-2xl text-blue-600"></i>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Enjoy</h4>
                    <p class="text-gray-600">Read and return within the lending period</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modified Featured Books Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="flex justify-between items-center mb-8">
            <h3 class="text-2xl font-bold text-gray-900">Featured Books</h3>
            <div class="flex space-x-2">
                <button class="p-2 rounded-full bg-gray-100 hover:bg-blue-100" id="prevBook">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="p-2 rounded-full bg-gray-100 hover:bg-blue-100" id="nextBook">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
        <div id="featuredBooks" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Books will be dynamically inserted here -->
        </div>
    </div>

    <!-- Modified Popular Authors Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-2xl font-bold text-gray-900 mb-8">Popular Authors</h3>
            <div id="popularAuthors" class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Authors will be dynamically inserted here -->
            </div>
        </div>
    </div>

    <!-- Enhanced Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="space-y-4">
                    <h5 class="text-lg font-semibold mb-4">About Us</h5>
                    <p class="text-gray-400">Your gateway to knowledge and discovery. We provide access to thousands of
                        books and resources.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div>
                    <h5 class="text-lg font-semibold mb-4">Quick Links</h5>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Books</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">E-Books</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Events</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-lg font-semibold mb-4">Support</h5>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Help Center</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Terms of Service</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-lg font-semibold mb-4">Contact Us</h5>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center"><i class="fas fa-map-marker-alt w-5"></i> 123 Library Street</li>
                        <li class="flex items-center"><i class="fas fa-phone w-5"></i> (123) 456-7890</li>
                        <li class="flex items-center"><i class="fas fa-envelope w-5"></i> info@library.com</li>
                        <li class="flex items-center"><i class="fas fa-clock w-5"></i> Mon-Fri: 9AM-8PM</li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-800 text-center text-gray-400">
                <p>&copy; 2025 Library Management System. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Enhanced search functionality
        const searchInput = document.getElementById('search');

        searchInput?.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                console.log('Searching for:', searchInput.value);
            }
        });

        // Book carousel navigation
        const prevButton = document.getElementById('prevBook');
        const nextButton = document.getElementById('nextBook');

        prevButton?.addEventListener('click', () => {
            // Implement previous book logic
            console.log('Previous book');
        });

        nextButton?.addEventListener('click', () => {
            // Implement next book logic
            console.log('Next book');
        });

        // Animate elements on scroll

    </script>

    <!-- Add this script section just before the closing body tag -->
    <script>
        // Sample data for books and authors
        const books = [
            {
                id: 1,
                title: "The Great Gatsby",
                author: "F. Scott Fitzgerald",
                cover: "https://m.media-amazon.com/images/I/71FTb9X6wsL._AC_UF1000,1000_QL80_.jpg",
                rating: 4.5,
                reviews: 120,
                category: "fiction",
                isNew: true,
                available: true
            },
            {
                id: 2,
                title: "1984",
                author: "George Orwell",
                cover: "https://m.media-amazon.com/images/I/71kxa1-0mfL._AC_UF1000,1000_QL80_.jpg",
                rating: 4.8,
                reviews: 200,
                category: "fiction",
                isNew: false,
                available: true
            },
            {
                id: 3,
                title: "To Kill a Mockingbird",
                author: "Harper Lee",
                cover: "https://m.media-amazon.com/images/I/71FxgtFKcQL._AC_UF1000,1000_QL80_.jpg",
                rating: 4.9,
                reviews: 180,
                category: "fiction",
                isNew: false,
                available: false
            },
            {
                id: 4,
                title: "The Catcher in the Rye",
                author: "J.D. Salinger",
                cover: "https://m.media-amazon.com/images/I/7108sdEUEGL.jpg",
                rating: 4.3,
                reviews: 150,
                category: "fiction",
                isNew: false,
                available: true
            },
            {
                id: 5,
                title: "Pride and Prejudice",
                author: "Jane Austen",
                cover: "https://m.media-amazon.com/images/I/71Q1tPupKjL._AC_UF1000,1000_QL80_.jpg",
                rating: 4.7,
                reviews: 230,
                category: "fiction",
                isNew: false,
                available: true
            },
            {
                id: 6,
                title: "The Hobbit",
                author: "J.R.R. Tolkien",
                cover: "https://m.media-amazon.com/images/I/710+HcoP38L._AC_UF1000,1000_QL80_.jpg",
                rating: 4.8,
                reviews: 300,
                category: "fantasy",
                isNew: false,
                available: true
            }
        ];

        const authors = [
            {
                id: 1,
                name: "J.K. Rowling",
                genre: "Fantasy",
                image: "https://hips.hearstapps.com/hmg-prod/images/gettyimages-1061157246.jpg?crop=1xw:1.0xh;center,top&resize=640:*",
                books: 12
            },
            {
                id: 2,
                name: "Stephen King",
                genre: "Horror",
                image: "https://cdn.britannica.com/20/217720-050-857D712B/American-novelist-Stephen-King-2004.jpg",
                books: 65
            },
            {
                id: 3,
                name: "Agatha Christie",
                genre: "Mystery",
                image: "https://upload.wikimedia.org/wikipedia/commons/c/cf/Agatha_Christie.png",
                books: 66
            },
            {
                id: 4,
                name: "Paulo Coelho",
                genre: "Fiction",
                image: "https://images3.penguinrandomhouse.com/author/5234",
                books: 28
            }
        ];

        // Function to create star rating
        function createStarRating(rating) {
            const fullStars = Math.floor(rating);
            const hasHalfStar = rating % 1 !== 0;
            let starsHTML = '';

            for (let i = 0; i < fullStars; i++) {
                starsHTML += '<i class="fas fa-star text-yellow-400"></i>';
            }
            if (hasHalfStar) {
                starsHTML += '<i class="fas fa-star-half-alt text-yellow-400"></i>';
            }
            const emptyStars = 5 - Math.ceil(rating);
            for (let i = 0; i < emptyStars; i++) {
                starsHTML += '<i class="far fa-star text-yellow-400"></i>';
            }
            return starsHTML;
        }

        // Function to render book card
        function createBookCard(book) {
            return `
        <div class="book-card bg-white rounded-lg shadow-sm hover:shadow-xl transition-all duration-300">
            <div class="relative">
                <img src="${book.cover}" alt="${book.title}" class="w-full h-64 object-contain bg-gray-50 rounded-t-lg p-2">
                ${book.isNew ? '<div class="absolute top-2 right-2 bg-yellow-400 text-xs font-bold px-2 py-1 rounded">NEW</div>' : ''}
            </div>
            <div class="p-4">
                <div class="flex items-center mb-2">
                    <div class="flex text-yellow-400">
                        ${createStarRating(book.rating)}
                    </div>
                    <span class="text-sm text-gray-600 ml-2">${book.rating} (${book.reviews} reviews)</span>
                </div>
                <h4 class="text-lg font-semibold text-gray-900">${book.title}</h4>
                <p class="text-sm text-gray-600 mb-2">${book.author}</p>
                <div class="flex justify-between items-center mt-4">
                    <button onclick='openModal(${JSON.stringify(book)})' class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                        View Details
                    </button>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300 ${!book.available ? 'opacity-50 cursor-not-allowed' : ''}"
                            ${!book.available ? 'disabled' : ''}>
                        ${book.available ? 'Borrow' : 'Reserved'}
                    </button>
                </div>
            </div>
        </div>
    `;
        }

        // Function to render author card
        function createAuthorCard(author) {
            return `
        <div class="text-center">
            <img src="${author.image}" alt="${author.name}" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
            <h4 class="font-semibold">${author.name}</h4>
            <p class="text-sm text-gray-600">${author.genre}</p>
            <p class="text-xs text-gray-500">${author.books} books</p>
        </div>
    `;
        }

        // Initialize the page
        let currentBookIndex = 0;
        const booksPerPage = 4;

        // Function to display books
        function displayBooks(startIndex) {
            const booksContainer = document.getElementById('featuredBooks');
            booksContainer.innerHTML = '';

            const endIndex = Math.min(startIndex + booksPerPage, books.length);
            for (let i = startIndex; i < endIndex; i++) {
                booksContainer.innerHTML += createBookCard(books[i]);
            }
        }

        // Function to display authors
        function displayAuthors() {
            const authorsContainer = document.getElementById('popularAuthors');
            authorsContainer.innerHTML = '';

            authors.forEach(author => {
                authorsContainer.innerHTML += createAuthorCard(author);
            });
        }

        // Initialize the display
        displayBooks(currentBookIndex);
        displayAuthors();

        // Event Listeners for navigation buttons
        document.getElementById('prevBook')?.addEventListener('click', () => {
            if (currentBookIndex > 0) {
                currentBookIndex -= booksPerPage;
                displayBooks(currentBookIndex);
            }
        });

        document.getElementById('nextBook')?.addEventListener('click', () => {
            if (currentBookIndex + booksPerPage < books.length) {
                currentBookIndex += booksPerPage;
                displayBooks(currentBookIndex);
            }
        });

        // Search functionality
        document.getElementById('searchBtn')?.addEventListener('click', () => {
            const searchTerm = document.getElementById('search').value.toLowerCase();
            const category = document.getElementById('categoryFilter').value;

            const filteredBooks = books.filter(book => {
                const matchesSearch = book.title.toLowerCase().includes(searchTerm) ||
                    book.author.toLowerCase().includes(searchTerm);
                const matchesCategory = category === 'all' || book.category === category;
                return matchesSearch && matchesCategory;
            });

            const booksContainer = document.getElementById('featuredBooks');
            booksContainer.innerHTML = '';

            if (filteredBooks.length === 0) {
                booksContainer.innerHTML = `
            <div class="col-span-full text-center py-8">
                <p class="text-gray-600">No books found matching your criteria.</p>
            </div>
        `;
            } else {
                filteredBooks.slice(0, booksPerPage).forEach(book => {
                    booksContainer.innerHTML += createBookCard(book);
                });
            }
        });

        // Add event listeners for borrow buttons
        document.addEventListener('click', (e) => {
            if (e.target.matches('button') && e.target.textContent.trim() === 'Borrow') {
                alert('Book borrowed successfully!');
                // Here you would typically implement the actual borrowing logic
            }
        });

        function debounce(func, wait) {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func(...args);
                };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        }

        function showLoadingState() {
            const booksContainer = document.getElementById('featuredBooks');
            booksContainer.innerHTML = Array(4).fill(0).map(() => `
        <div class="bg-white rounded-lg shadow-sm p-4">
            <div class="loading w-full h-64 rounded-lg mb-4"></div>
            <div class="loading h-4 w-3/4 rounded mb-2"></div>
            <div class="loading h-4 w-1/2 rounded mb-4"></div>
            <div class="loading h-8 w-full rounded"></div>
        </div>
    `).join('');
        }

        const searchBooks = debounce((searchTerm, category) => {
            showLoadingState();
            setTimeout(() => {
                const filteredBooks = books.filter(book => {
                    const matchesSearch = book.title.toLowerCase().includes(searchTerm.toLowerCase()) ||
                        book.author.toLowerCase().includes(searchTerm.toLowerCase());
                    const matchesCategory = category === 'all' || book.category === category;
                    return matchesSearch && matchesCategory;
                });

                const booksContainer = document.getElementById('featuredBooks');
                booksContainer.innerHTML = '';

                if (filteredBooks.length === 0) {
                    booksContainer.innerHTML = `
                <div class="col-span-full text-center py-8">
                    <p class="text-gray-600">No books found matching your criteria.</p>
                </div>
            `;
                } else {
                    filteredBooks.slice(0, booksPerPage).forEach(book => {
                        booksContainer.innerHTML += createBookCard(book);
                    });
                }
            }, 500);
        }, 300);

        // Update search input event listener
        document.getElementById('search')?.addEventListener('input', (e) => {
            const category = document.getElementById('categoryFilter').value;
            searchBooks(e.target.value, category);
        });

        document.getElementById('categoryFilter')?.addEventListener('change', (e) => {
            const searchTerm = document.getElementById('search').value;
            searchBooks(searchTerm, e.target.value);
        });
    </script>
    <div id="bookModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg max-w-2xl w-full mx-4 p-6">
            <div class="flex justify-between items-start mb-4">
                <h3 class="text-2xl font-bold" id="modalTitle"></h3>
                <button class="text-gray-500 hover:text-gray-700" onclick="closeModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div id="modalContent"></div>
        </div>
    </div>
    <script>
        function openModal(book) {
            const modal = document.getElementById('bookModal');
            const modalTitle = document.getElementById('modalTitle');
            const modalContent = document.getElementById('modalContent');

            modalTitle.textContent = book.title;
            modalContent.innerHTML = `
        <div class="flex flex-col md:flex-row gap-6">
            <img src="${book.cover}" alt="${book.title}" class="w-full md:w-48 h-auto object-contain bg-gray-50 rounded-lg p-2">
            <div>
                <p class="text-lg text-gray-600 mb-2">By ${book.author}</p>
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        ${createStarRating(book.rating)}
                    </div>
                    <span class="text-sm text-gray-600 ml-2">${book.rating} (${book.reviews} reviews)</span>
                </div>
                <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="flex items-center justify-between">
                    <span class="text-sm ${book.available ? 'text-green-600' : 'text-red-600'} font-medium">
                        <i class="fas ${book.available ? 'fa-check-circle' : 'fa-times-circle'} mr-1"></i>
                        ${book.available ? 'Available' : 'Currently Unavailable'}
                    </span>
                    <button class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition duration-300 ${!book.available ? 'opacity-50 cursor-not-allowed' : ''}"
                            ${!book.available ? 'disabled' : ''}>
                        ${book.available ? 'Borrow Now' : 'Join Waitlist'}
                    </button>
                </div>
            </div>
        </div>
    `;

            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeModal() {
            const modal = document.getElementById('bookModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    </script>
</body>

=======
=======
<<<<<<<< HEAD:index.html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System - Enhanced</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .animate-fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .book-card {
            transition: transform 0.3s ease;
        }

        .book-card:hover {
            transform: translateY(-5px);
        }
    </style>
    <style>
        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }

            100% {
                background-position: 1000px 0;
            }
        }

        .loading {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 1000px 100%;
            animation: shimmer 2s infinite linear;
        }
    </style>
</head>

<body class="bg-gray-50">

    <!-- Navigation (Enhanced with dropdown) -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex-shrink-0 flex items-center">
                    <h1 class="text-xl font-bold text-gray-800"><a href="index.html">📚 LibrarySystem</a></h1>
                </div>
                <div class="hidden sm:flex sm:space-x-4 items-center">
                    <button
                        class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300"><a
                            href="login.html">Login</a></button>
                    <button
                        class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition duration-300"><a
                            href="register.html">Register</a></button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Modified Hero Section with Image Background -->
    <div class="relative">
        <div class="absolute inset-0">
            <img src="https://www.edigitallibrary.com/img/library-img.jpg" alt="Library Background"
                class="w-full h-[600px] object-cover filter brightness-40">
        </div>
        <div class="relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
                <div class="text-center">
                    <h2 class="text-4xl font-extrabold sm:text-5xl mb-4 text-white">
                        Your Gateway to Knowledge
                    </h2>
                    <p class="text-xl text-gray-200 mb-8">
                        Discover millions of books, articles, and resources at your fingertips.
                    </p>
                    <div class="max-w-3xl mx-auto">
                        <div class="bg-white rounded-lg p-4 shadow-lg">
                            <div class="flex flex-wrap gap-4">
                                <input type="text" id="search"
                                    class="flex-1 p-3 border rounded-lg focus:ring-2 focus:ring-blue-500 text-gray-800"
                                    placeholder="Search by title, author, or ISBN...">
                                <select id="categoryFilter"
                                    class="p-3 border rounded-lg text-gray-800 w-full md:w-auto">
                                    <option value="all">All Categories</option>
                                    <option value="fiction">Fiction</option>
                                    <option value="non-fiction">Non-Fiction</option>
                                    <option value="academic">Academic</option>
                                </select>
                                <button id="searchBtn"
                                    class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300 w-full md:w-auto">
                                    Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- How It Works Section -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-3xl font-bold text-center text-gray-900 mb-12">How It Works</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-search text-2xl text-blue-600"></i>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Search</h4>
                    <p class="text-gray-600">Browse our vast collection of books and resources</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-book-reader text-2xl text-blue-600"></i>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Borrow</h4>
                    <p class="text-gray-600">Check out books with your library card</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heart text-2xl text-blue-600"></i>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Enjoy</h4>
                    <p class="text-gray-600">Read and return within the lending period</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modified Featured Books Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="flex justify-between items-center mb-8">
            <h3 class="text-2xl font-bold text-gray-900">Featured Books</h3>
            <div class="flex space-x-2">
                <button class="p-2 rounded-full bg-gray-100 hover:bg-blue-100" id="prevBook">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="p-2 rounded-full bg-gray-100 hover:bg-blue-100" id="nextBook">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
        <div id="featuredBooks" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Books will be dynamically inserted here -->
        </div>
    </div>

    <!-- Modified Popular Authors Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-2xl font-bold text-gray-900 mb-8">Popular Authors</h3>
            <div id="popularAuthors" class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Authors will be dynamically inserted here -->
            </div>
        </div>
    </div>

    <!-- Enhanced Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="space-y-4">
                    <h5 class="text-lg font-semibold mb-4">About Us</h5>
                    <p class="text-gray-400">Your gateway to knowledge and discovery. We provide access to thousands of
                        books and resources.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div>
                    <h5 class="text-lg font-semibold mb-4">Quick Links</h5>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Books</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">E-Books</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Events</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-lg font-semibold mb-4">Support</h5>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Help Center</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Terms of Service</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-lg font-semibold mb-4">Contact Us</h5>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center"><i class="fas fa-map-marker-alt w-5"></i> 123 Library Street</li>
                        <li class="flex items-center"><i class="fas fa-phone w-5"></i> (123) 456-7890</li>
                        <li class="flex items-center"><i class="fas fa-envelope w-5"></i> info@library.com</li>
                        <li class="flex items-center"><i class="fas fa-clock w-5"></i> Mon-Fri: 9AM-8PM</li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-800 text-center text-gray-400">
                <p>&copy; 2025 Library Management System. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Enhanced search functionality
        const searchInput = document.getElementById('search');

        searchInput?.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                console.log('Searching for:', searchInput.value);
            }
        });

        // Book carousel navigation
        const prevButton = document.getElementById('prevBook');
        const nextButton = document.getElementById('nextBook');

        prevButton?.addEventListener('click', () => {
            // Implement previous book logic
            console.log('Previous book');
        });

        nextButton?.addEventListener('click', () => {
            // Implement next book logic
            console.log('Next book');
        });

        // Animate elements on scroll

    </script>

    <!-- Add this script section just before the closing body tag -->
    <script>
        // Sample data for books and authors
        const books = [
            {
                id: 1,
                title: "The Great Gatsby",
                author: "F. Scott Fitzgerald",
                cover: "https://m.media-amazon.com/images/I/71FTb9X6wsL._AC_UF1000,1000_QL80_.jpg",
                rating: 4.5,
                reviews: 120,
                category: "fiction",
                isNew: true,
                available: true
            },
            {
                id: 2,
                title: "1984",
                author: "George Orwell",
                cover: "https://m.media-amazon.com/images/I/71kxa1-0mfL._AC_UF1000,1000_QL80_.jpg",
                rating: 4.8,
                reviews: 200,
                category: "fiction",
                isNew: false,
                available: true
            },
            {
                id: 3,
                title: "To Kill a Mockingbird",
                author: "Harper Lee",
                cover: "https://m.media-amazon.com/images/I/71FxgtFKcQL._AC_UF1000,1000_QL80_.jpg",
                rating: 4.9,
                reviews: 180,
                category: "fiction",
                isNew: false,
                available: false
            },
            {
                id: 4,
                title: "The Catcher in the Rye",
                author: "J.D. Salinger",
                cover: "https://m.media-amazon.com/images/I/7108sdEUEGL.jpg",
                rating: 4.3,
                reviews: 150,
                category: "fiction",
                isNew: false,
                available: true
            },
            {
                id: 5,
                title: "Pride and Prejudice",
                author: "Jane Austen",
                cover: "https://m.media-amazon.com/images/I/71Q1tPupKjL._AC_UF1000,1000_QL80_.jpg",
                rating: 4.7,
                reviews: 230,
                category: "fiction",
                isNew: false,
                available: true
            },
            {
                id: 6,
                title: "The Hobbit",
                author: "J.R.R. Tolkien",
                cover: "https://m.media-amazon.com/images/I/710+HcoP38L._AC_UF1000,1000_QL80_.jpg",
                rating: 4.8,
                reviews: 300,
                category: "fantasy",
                isNew: false,
                available: true
            }
        ];

        const authors = [
            {
                id: 1,
                name: "J.K. Rowling",
                genre: "Fantasy",
                image: "https://hips.hearstapps.com/hmg-prod/images/gettyimages-1061157246.jpg?crop=1xw:1.0xh;center,top&resize=640:*",
                books: 12
            },
            {
                id: 2,
                name: "Stephen King",
                genre: "Horror",
                image: "https://cdn.britannica.com/20/217720-050-857D712B/American-novelist-Stephen-King-2004.jpg",
                books: 65
            },
            {
                id: 3,
                name: "Agatha Christie",
                genre: "Mystery",
                image: "https://upload.wikimedia.org/wikipedia/commons/c/cf/Agatha_Christie.png",
                books: 66
            },
            {
                id: 4,
                name: "Paulo Coelho",
                genre: "Fiction",
                image: "https://images3.penguinrandomhouse.com/author/5234",
                books: 28
            }
        ];

        // Function to create star rating
        function createStarRating(rating) {
            const fullStars = Math.floor(rating);
            const hasHalfStar = rating % 1 !== 0;
            let starsHTML = '';

            for (let i = 0; i < fullStars; i++) {
                starsHTML += '<i class="fas fa-star text-yellow-400"></i>';
            }
            if (hasHalfStar) {
                starsHTML += '<i class="fas fa-star-half-alt text-yellow-400"></i>';
            }
            const emptyStars = 5 - Math.ceil(rating);
            for (let i = 0; i < emptyStars; i++) {
                starsHTML += '<i class="far fa-star text-yellow-400"></i>';
            }
            return starsHTML;
        }

        // Function to render book card
        function createBookCard(book) {
            return `
        <div class="book-card bg-white rounded-lg shadow-sm hover:shadow-xl transition-all duration-300">
            <div class="relative">
                <img src="${book.cover}" alt="${book.title}" class="w-full h-64 object-contain bg-gray-50 rounded-t-lg p-2">
                ${book.isNew ? '<div class="absolute top-2 right-2 bg-yellow-400 text-xs font-bold px-2 py-1 rounded">NEW</div>' : ''}
            </div>
            <div class="p-4">
                <div class="flex items-center mb-2">
                    <div class="flex text-yellow-400">
                        ${createStarRating(book.rating)}
                    </div>
                    <span class="text-sm text-gray-600 ml-2">${book.rating} (${book.reviews} reviews)</span>
                </div>
                <h4 class="text-lg font-semibold text-gray-900">${book.title}</h4>
                <p class="text-sm text-gray-600 mb-2">${book.author}</p>
                <div class="flex justify-between items-center mt-4">
                    <button onclick='openModal(${JSON.stringify(book)})' class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                        View Details
                    </button>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300 ${!book.available ? 'opacity-50 cursor-not-allowed' : ''}"
                            ${!book.available ? 'disabled' : ''}>
                        ${book.available ? 'Borrow' : 'Reserved'}
                    </button>
                </div>
            </div>
        </div>
    `;
        }

        // Function to render author card
        function createAuthorCard(author) {
            return `
        <div class="text-center">
            <img src="${author.image}" alt="${author.name}" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
            <h4 class="font-semibold">${author.name}</h4>
            <p class="text-sm text-gray-600">${author.genre}</p>
            <p class="text-xs text-gray-500">${author.books} books</p>
        </div>
    `;
        }

        // Initialize the page
        let currentBookIndex = 0;
        const booksPerPage = 4;

        // Function to display books
        function displayBooks(startIndex) {
            const booksContainer = document.getElementById('featuredBooks');
            booksContainer.innerHTML = '';

            const endIndex = Math.min(startIndex + booksPerPage, books.length);
            for (let i = startIndex; i < endIndex; i++) {
                booksContainer.innerHTML += createBookCard(books[i]);
            }
        }

        // Function to display authors
        function displayAuthors() {
            const authorsContainer = document.getElementById('popularAuthors');
            authorsContainer.innerHTML = '';

            authors.forEach(author => {
                authorsContainer.innerHTML += createAuthorCard(author);
            });
        }

        // Initialize the display
        displayBooks(currentBookIndex);
        displayAuthors();

        // Event Listeners for navigation buttons
        document.getElementById('prevBook')?.addEventListener('click', () => {
            if (currentBookIndex > 0) {
                currentBookIndex -= booksPerPage;
                displayBooks(currentBookIndex);
            }
        });

        document.getElementById('nextBook')?.addEventListener('click', () => {
            if (currentBookIndex + booksPerPage < books.length) {
                currentBookIndex += booksPerPage;
                displayBooks(currentBookIndex);
            }
        });

        // Search functionality
        document.getElementById('searchBtn')?.addEventListener('click', () => {
            const searchTerm = document.getElementById('search').value.toLowerCase();
            const category = document.getElementById('categoryFilter').value;

            const filteredBooks = books.filter(book => {
                const matchesSearch = book.title.toLowerCase().includes(searchTerm) ||
                    book.author.toLowerCase().includes(searchTerm);
                const matchesCategory = category === 'all' || book.category === category;
                return matchesSearch && matchesCategory;
            });

            const booksContainer = document.getElementById('featuredBooks');
            booksContainer.innerHTML = '';

            if (filteredBooks.length === 0) {
                booksContainer.innerHTML = `
            <div class="col-span-full text-center py-8">
                <p class="text-gray-600">No books found matching your criteria.</p>
            </div>
        `;
            } else {
                filteredBooks.slice(0, booksPerPage).forEach(book => {
                    booksContainer.innerHTML += createBookCard(book);
                });
            }
        });

        // Add event listeners for borrow buttons
        document.addEventListener('click', (e) => {
            if (e.target.matches('button') && e.target.textContent.trim() === 'Borrow') {
                alert('Book borrowed successfully!');
                // Here you would typically implement the actual borrowing logic
            }
        });

        function debounce(func, wait) {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func(...args);
                };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        }

        function showLoadingState() {
            const booksContainer = document.getElementById('featuredBooks');
            booksContainer.innerHTML = Array(4).fill(0).map(() => `
        <div class="bg-white rounded-lg shadow-sm p-4">
            <div class="loading w-full h-64 rounded-lg mb-4"></div>
            <div class="loading h-4 w-3/4 rounded mb-2"></div>
            <div class="loading h-4 w-1/2 rounded mb-4"></div>
            <div class="loading h-8 w-full rounded"></div>
        </div>
    `).join('');
        }

        const searchBooks = debounce((searchTerm, category) => {
            showLoadingState();
            setTimeout(() => {
                const filteredBooks = books.filter(book => {
                    const matchesSearch = book.title.toLowerCase().includes(searchTerm.toLowerCase()) ||
                        book.author.toLowerCase().includes(searchTerm.toLowerCase());
                    const matchesCategory = category === 'all' || book.category === category;
                    return matchesSearch && matchesCategory;
                });

                const booksContainer = document.getElementById('featuredBooks');
                booksContainer.innerHTML = '';

                if (filteredBooks.length === 0) {
                    booksContainer.innerHTML = `
                <div class="col-span-full text-center py-8">
                    <p class="text-gray-600">No books found matching your criteria.</p>
                </div>
            `;
                } else {
                    filteredBooks.slice(0, booksPerPage).forEach(book => {
                        booksContainer.innerHTML += createBookCard(book);
                    });
                }
            }, 500);
        }, 300);

        // Update search input event listener
        document.getElementById('search')?.addEventListener('input', (e) => {
            const category = document.getElementById('categoryFilter').value;
            searchBooks(e.target.value, category);
        });

        document.getElementById('categoryFilter')?.addEventListener('change', (e) => {
            const searchTerm = document.getElementById('search').value;
            searchBooks(searchTerm, e.target.value);
        });
    </script>
    <div id="bookModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg max-w-2xl w-full mx-4 p-6">
            <div class="flex justify-between items-start mb-4">
                <h3 class="text-2xl font-bold" id="modalTitle"></h3>
                <button class="text-gray-500 hover:text-gray-700" onclick="closeModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div id="modalContent"></div>
        </div>
    </div>
    <script>
        function openModal(book) {
            const modal = document.getElementById('bookModal');
            const modalTitle = document.getElementById('modalTitle');
            const modalContent = document.getElementById('modalContent');

            modalTitle.textContent = book.title;
            modalContent.innerHTML = `
        <div class="flex flex-col md:flex-row gap-6">
            <img src="${book.cover}" alt="${book.title}" class="w-full md:w-48 h-auto object-contain bg-gray-50 rounded-lg p-2">
            <div>
                <p class="text-lg text-gray-600 mb-2">By ${book.author}</p>
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        ${createStarRating(book.rating)}
                    </div>
                    <span class="text-sm text-gray-600 ml-2">${book.rating} (${book.reviews} reviews)</span>
                </div>
                <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="flex items-center justify-between">
                    <span class="text-sm ${book.available ? 'text-green-600' : 'text-red-600'} font-medium">
                        <i class="fas ${book.available ? 'fa-check-circle' : 'fa-times-circle'} mr-1"></i>
                        ${book.available ? 'Available' : 'Currently Unavailable'}
                    </span>
                    <button class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition duration-300 ${!book.available ? 'opacity-50 cursor-not-allowed' : ''}"
                            ${!book.available ? 'disabled' : ''}>
                        ${book.available ? 'Borrow Now' : 'Join Waitlist'}
                    </button>
                </div>
            </div>
        </div>
    `;

            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeModal() {
            const modal = document.getElementById('bookModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    </script>
</body>

========
>>>>>>> f39af0c9f037d3104e6464d26bd62d8701c04cef
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System - Enhanced</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .animate-fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .book-card {
            transition: transform 0.3s ease;
        }

        .book-card:hover {
            transform: translateY(-5px);
        }
    </style>
    <style>
        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }

            100% {
                background-position: 1000px 0;
            }
        }

        .loading {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 1000px 100%;
            animation: shimmer 2s infinite linear;
        }
    </style>
</head>

<body class="bg-gray-50">

    <!-- Navigation (Enhanced with dropdown) -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex-shrink-0 flex items-center">
                    <h1 class="text-xl font-bold text-gray-800"><a href="index.html">📚 LibrarySystem</a></h1>
                </div>
                <div class="hidden sm:flex sm:space-x-4 items-center">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300"><a href="login.php">Login</a></button>
                    <button class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition duration-300"><a href="register.php">Register</a></button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Modified Hero Section with Image Background -->
    <div class="relative">
        <div class="absolute inset-0">
            <img src="https://www.edigitallibrary.com/img/library-img.jpg" alt="Library Background"
                class="w-full h-[600px] object-cover filter brightness-40">
        </div>
        <div class="relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
                <div class="text-center">
                    <h2 class="text-4xl font-extrabold sm:text-5xl mb-4 text-white">
                        Your Gateway to Knowledge
                    </h2>
                    <p class="text-xl text-gray-200 mb-8">
                        Discover millions of books, articles, and resources at your fingertips.
                    </p>
                    <div class="max-w-3xl mx-auto">
                        <div class="bg-white rounded-lg p-4 shadow-lg">
                            <div class="flex flex-wrap gap-4">
                                <input type="text" id="search"
                                    class="flex-1 p-3 border rounded-lg focus:ring-2 focus:ring-blue-500 text-gray-800"
                                    placeholder="Search by title, author, or ISBN...">
                                <select id="categoryFilter"
                                    class="p-3 border rounded-lg text-gray-800 w-full md:w-auto">
                                    <option value="all">All Categories</option>
                                    <option value="fiction">Fiction</option>
                                    <option value="non-fiction">Non-Fiction</option>
                                    <option value="academic">Academic</option>
                                </select>
                                <button id="searchBtn"
                                    class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300 w-full md:w-auto">
                                    Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- How It Works Section -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-3xl font-bold text-center text-gray-900 mb-12">How It Works</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-search text-2xl text-blue-600"></i>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Search</h4>
                    <p class="text-gray-600">Browse our vast collection of books and resources</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-book-reader text-2xl text-blue-600"></i>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Borrow</h4>
                    <p class="text-gray-600">Check out books with your library card</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heart text-2xl text-blue-600"></i>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Enjoy</h4>
                    <p class="text-gray-600">Read and return within the lending period</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modified Featured Books Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="flex justify-between items-center mb-8">
            <h3 class="text-2xl font-bold text-gray-900">Featured Books</h3>
            <div class="flex space-x-2">
                <button class="p-2 rounded-full bg-gray-100 hover:bg-blue-100" id="prevBook">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="p-2 rounded-full bg-gray-100 hover:bg-blue-100" id="nextBook">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
        <div id="featuredBooks" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Books will be dynamically inserted here -->
        </div>
    </div>

    <!-- Modified Popular Authors Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-2xl font-bold text-gray-900 mb-8">Popular Authors</h3>
            <div id="popularAuthors" class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Authors will be dynamically inserted here -->
            </div>
        </div>
    </div>

    <!-- Enhanced Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="space-y-4">
                    <h5 class="text-lg font-semibold mb-4">About Us</h5>
                    <p class="text-gray-400">Your gateway to knowledge and discovery. We provide access to thousands of
                        books and resources.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div>
                    <h5 class="text-lg font-semibold mb-4">Quick Links</h5>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Books</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">E-Books</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Events</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-lg font-semibold mb-4">Support</h5>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Help Center</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Terms of Service</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-lg font-semibold mb-4">Contact Us</h5>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center"><i class="fas fa-map-marker-alt w-5"></i> 123 Library Street</li>
                        <li class="flex items-center"><i class="fas fa-phone w-5"></i> (123) 456-7890</li>
                        <li class="flex items-center"><i class="fas fa-envelope w-5"></i> info@library.com</li>
                        <li class="flex items-center"><i class="fas fa-clock w-5"></i> Mon-Fri: 9AM-8PM</li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-800 text-center text-gray-400">
                <p>&copy; 2025 Library Management System. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Enhanced search functionality
        const searchInput = document.getElementById('search');

        searchInput?.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                console.log('Searching for:', searchInput.value);
            }
        });

        // Book carousel navigation
        const prevButton = document.getElementById('prevBook');
        const nextButton = document.getElementById('nextBook');

        prevButton?.addEventListener('click', () => {
            // Implement previous book logic
            console.log('Previous book');
        });

        nextButton?.addEventListener('click', () => {
            // Implement next book logic
            console.log('Next book');
        });

        // Animate elements on scroll

    </script>

    <!-- Add this script section just before the closing body tag -->
    <script>
        // Sample data for books and authors
        const books = [
            {
                id: 1,
                title: "The Great Gatsby",
                author: "F. Scott Fitzgerald",
                cover: "https://m.media-amazon.com/images/I/71FTb9X6wsL._AC_UF1000,1000_QL80_.jpg",
                rating: 4.5,
                reviews: 120,
                category: "fiction",
                isNew: true,
                available: true
            },
            {
                id: 2,
                title: "1984",
                author: "George Orwell",
                cover: "https://m.media-amazon.com/images/I/71kxa1-0mfL._AC_UF1000,1000_QL80_.jpg",
                rating: 4.8,
                reviews: 200,
                category: "fiction",
                isNew: false,
                available: true
            },
            {
                id: 3,
                title: "To Kill a Mockingbird",
                author: "Harper Lee",
                cover: "https://m.media-amazon.com/images/I/71FxgtFKcQL._AC_UF1000,1000_QL80_.jpg",
                rating: 4.9,
                reviews: 180,
                category: "fiction",
                isNew: false,
                available: false
            },
            {
                id: 4,
                title: "The Catcher in the Rye",
                author: "J.D. Salinger",
                cover: "https://m.media-amazon.com/images/I/7108sdEUEGL.jpg",
                rating: 4.3,
                reviews: 150,
                category: "fiction",
                isNew: false,
                available: true
            },
            {
                id: 5,
                title: "Pride and Prejudice",
                author: "Jane Austen",
                cover: "https://m.media-amazon.com/images/I/71Q1tPupKjL._AC_UF1000,1000_QL80_.jpg",
                rating: 4.7,
                reviews: 230,
                category: "fiction",
                isNew: false,
                available: true
            },
            {
                id: 6,
                title: "The Hobbit",
                author: "J.R.R. Tolkien",
                cover: "https://m.media-amazon.com/images/I/710+HcoP38L._AC_UF1000,1000_QL80_.jpg",
                rating: 4.8,
                reviews: 300,
                category: "fantasy",
                isNew: false,
                available: true
            }
        ];

        const authors = [
            {
                id: 1,
                name: "J.K. Rowling",
                genre: "Fantasy",
                image: "https://hips.hearstapps.com/hmg-prod/images/gettyimages-1061157246.jpg?crop=1xw:1.0xh;center,top&resize=640:*",
                books: 12
            },
            {
                id: 2,
                name: "Stephen King",
                genre: "Horror",
                image: "https://cdn.britannica.com/20/217720-050-857D712B/American-novelist-Stephen-King-2004.jpg",
                books: 65
            },
            {
                id: 3,
                name: "Agatha Christie",
                genre: "Mystery",
                image: "https://upload.wikimedia.org/wikipedia/commons/c/cf/Agatha_Christie.png",
                books: 66
            },
            {
                id: 4,
                name: "Paulo Coelho",
                genre: "Fiction",
                image: "https://images3.penguinrandomhouse.com/author/5234",
                books: 28
            }
        ];

        // Function to create star rating
        function createStarRating(rating) {
            const fullStars = Math.floor(rating);
            const hasHalfStar = rating % 1 !== 0;
            let starsHTML = '';

            for (let i = 0; i < fullStars; i++) {
                starsHTML += '<i class="fas fa-star text-yellow-400"></i>';
            }
            if (hasHalfStar) {
                starsHTML += '<i class="fas fa-star-half-alt text-yellow-400"></i>';
            }
            const emptyStars = 5 - Math.ceil(rating);
            for (let i = 0; i < emptyStars; i++) {
                starsHTML += '<i class="far fa-star text-yellow-400"></i>';
            }
            return starsHTML;
        }

        // Function to render book card
        function createBookCard(book) {
            return `
        <div class="book-card bg-white rounded-lg shadow-sm hover:shadow-xl transition-all duration-300">
            <div class="relative">
                <img src="${book.cover}" alt="${book.title}" class="w-full h-64 object-contain bg-gray-50 rounded-t-lg p-2">
                ${book.isNew ? '<div class="absolute top-2 right-2 bg-yellow-400 text-xs font-bold px-2 py-1 rounded">NEW</div>' : ''}
            </div>
            <div class="p-4">
                <div class="flex items-center mb-2">
                    <div class="flex text-yellow-400">
                        ${createStarRating(book.rating)}
                    </div>
                    <span class="text-sm text-gray-600 ml-2">${book.rating} (${book.reviews} reviews)</span>
                </div>
                <h4 class="text-lg font-semibold text-gray-900">${book.title}</h4>
                <p class="text-sm text-gray-600 mb-2">${book.author}</p>
                <div class="flex justify-between items-center mt-4">
                    <button onclick='openModal(${JSON.stringify(book)})' class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                        View Details
                    </button>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300 ${!book.available ? 'opacity-50 cursor-not-allowed' : ''}"
                            ${!book.available ? 'disabled' : ''}>
                        ${book.available ? 'Borrow' : 'Reserved'}
                    </button>
                </div>
            </div>
        </div>
    `;
        }

        // Function to render author card
        function createAuthorCard(author) {
            return `
        <div class="text-center">
            <img src="${author.image}" alt="${author.name}" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
            <h4 class="font-semibold">${author.name}</h4>
            <p class="text-sm text-gray-600">${author.genre}</p>
            <p class="text-xs text-gray-500">${author.books} books</p>
        </div>
    `;
        }

        // Initialize the page
        let currentBookIndex = 0;
        const booksPerPage = 4;

        // Function to display books
        function displayBooks(startIndex) {
            const booksContainer = document.getElementById('featuredBooks');
            booksContainer.innerHTML = '';

            const endIndex = Math.min(startIndex + booksPerPage, books.length);
            for (let i = startIndex; i < endIndex; i++) {
                booksContainer.innerHTML += createBookCard(books[i]);
            }
        }

        // Function to display authors
        function displayAuthors() {
            const authorsContainer = document.getElementById('popularAuthors');
            authorsContainer.innerHTML = '';

            authors.forEach(author => {
                authorsContainer.innerHTML += createAuthorCard(author);
            });
        }

        // Initialize the display
        displayBooks(currentBookIndex);
        displayAuthors();

        // Event Listeners for navigation buttons
        document.getElementById('prevBook')?.addEventListener('click', () => {
            if (currentBookIndex > 0) {
                currentBookIndex -= booksPerPage;
                displayBooks(currentBookIndex);
            }
        });

        document.getElementById('nextBook')?.addEventListener('click', () => {
            if (currentBookIndex + booksPerPage < books.length) {
                currentBookIndex += booksPerPage;
                displayBooks(currentBookIndex);
            }
        });

        // Search functionality
        document.getElementById('searchBtn')?.addEventListener('click', () => {
            const searchTerm = document.getElementById('search').value.toLowerCase();
            const category = document.getElementById('categoryFilter').value;

            const filteredBooks = books.filter(book => {
                const matchesSearch = book.title.toLowerCase().includes(searchTerm) ||
                    book.author.toLowerCase().includes(searchTerm);
                const matchesCategory = category === 'all' || book.category === category;
                return matchesSearch && matchesCategory;
            });

            const booksContainer = document.getElementById('featuredBooks');
            booksContainer.innerHTML = '';

            if (filteredBooks.length === 0) {
                booksContainer.innerHTML = `
            <div class="col-span-full text-center py-8">
                <p class="text-gray-600">No books found matching your criteria.</p>
            </div>
        `;
            } else {
                filteredBooks.slice(0, booksPerPage).forEach(book => {
                    booksContainer.innerHTML += createBookCard(book);
                });
            }
        });

        // Add event listeners for borrow buttons
        document.addEventListener('click', (e) => {
            if (e.target.matches('button') && e.target.textContent.trim() === 'Borrow') {
                alert('Book borrowed successfully!');
                // Here you would typically implement the actual borrowing logic
            }
        });

        function debounce(func, wait) {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func(...args);
                };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        }

        function showLoadingState() {
            const booksContainer = document.getElementById('featuredBooks');
            booksContainer.innerHTML = Array(4).fill(0).map(() => `
        <div class="bg-white rounded-lg shadow-sm p-4">
            <div class="loading w-full h-64 rounded-lg mb-4"></div>
            <div class="loading h-4 w-3/4 rounded mb-2"></div>
            <div class="loading h-4 w-1/2 rounded mb-4"></div>
            <div class="loading h-8 w-full rounded"></div>
        </div>
    `).join('');
        }

        const searchBooks = debounce((searchTerm, category) => {
            showLoadingState();
            setTimeout(() => {
                const filteredBooks = books.filter(book => {
                    const matchesSearch = book.title.toLowerCase().includes(searchTerm.toLowerCase()) ||
                        book.author.toLowerCase().includes(searchTerm.toLowerCase());
                    const matchesCategory = category === 'all' || book.category === category;
                    return matchesSearch && matchesCategory;
                });

                const booksContainer = document.getElementById('featuredBooks');
                booksContainer.innerHTML = '';

                if (filteredBooks.length === 0) {
                    booksContainer.innerHTML = `
                <div class="col-span-full text-center py-8">
                    <p class="text-gray-600">No books found matching your criteria.</p>
                </div>
            `;
                } else {
                    filteredBooks.slice(0, booksPerPage).forEach(book => {
                        booksContainer.innerHTML += createBookCard(book);
                    });
                }
            }, 500);
        }, 300);

        // Update search input event listener
        document.getElementById('search')?.addEventListener('input', (e) => {
            const category = document.getElementById('categoryFilter').value;
            searchBooks(e.target.value, category);
        });

        document.getElementById('categoryFilter')?.addEventListener('change', (e) => {
            const searchTerm = document.getElementById('search').value;
            searchBooks(searchTerm, e.target.value);
        });
    </script>
    <div id="bookModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg max-w-2xl w-full mx-4 p-6">
            <div class="flex justify-between items-start mb-4">
                <h3 class="text-2xl font-bold" id="modalTitle"></h3>
                <button class="text-gray-500 hover:text-gray-700" onclick="closeModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div id="modalContent"></div>
        </div>
    </div>
    <script>
        function openModal(book) {
            const modal = document.getElementById('bookModal');
            const modalTitle = document.getElementById('modalTitle');
            const modalContent = document.getElementById('modalContent');

            modalTitle.textContent = book.title;
            modalContent.innerHTML = `
        <div class="flex flex-col md:flex-row gap-6">
            <img src="${book.cover}" alt="${book.title}" class="w-full md:w-48 h-auto object-contain bg-gray-50 rounded-lg p-2">
            <div>
                <p class="text-lg text-gray-600 mb-2">By ${book.author}</p>
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        ${createStarRating(book.rating)}
                    </div>
                    <span class="text-sm text-gray-600 ml-2">${book.rating} (${book.reviews} reviews)</span>
                </div>
                <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="flex items-center justify-between">
                    <span class="text-sm ${book.available ? 'text-green-600' : 'text-red-600'} font-medium">
                        <i class="fas ${book.available ? 'fa-check-circle' : 'fa-times-circle'} mr-1"></i>
                        ${book.available ? 'Available' : 'Currently Unavailable'}
                    </span>
                    <button class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition duration-300 ${!book.available ? 'opacity-50 cursor-not-allowed' : ''}"
                            ${!book.available ? 'disabled' : ''}>
                        ${book.available ? 'Borrow Now' : 'Join Waitlist'}
                    </button>
                </div>
            </div>
        </div>
    `;

            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeModal() {
            const modal = document.getElementById('bookModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    </script>
</body>

<<<<<<< HEAD
>>>>>>> f39af0c9f037d3104e6464d26bd62d8701c04cef:index.php
=======
>>>>>>>> f39af0c9f037d3104e6464d26bd62d8701c04cef:index.php
>>>>>>> f39af0c9f037d3104e6464d26bd62d8701c04cef
</html>