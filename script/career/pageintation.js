// just for forwarding of viewdetail
	document.querySelectorAll('.jobcardright button').forEach(e=>{
		e.addEventListener('click',()=>{window.location.href = './jobinside.html'})
	})



// 
const cardsPerPage = 5; // Number of cards to show per page 
const noofpagenumbers=3; //Number of page numbers to show
const dataContainer = document.getElementById('joblistingleft'); 
const pagination = document.getElementById('pagination'); 
const pageNumbers = document.getElementById('page-numbers'); 
const cards = Array.from(dataContainer.getElementsByClassName('jobcard')); 

// Calculate the total number of pages 
const totalPages = Math.ceil(cards.length / cardsPerPage); 
let currentPage = 1; 

// page number load
displaypagenumber(totalPages)

const prevButton = document.getElementById('prev'); 
const nextButton = document.getElementById('next'); 
const pageLinks = document.querySelectorAll('.page-link'); 


// display page numbers
function displaypagenumber(totalPages){
	pagenumberelement=`<a href="#" id="prev">Previous</a>`
	if(totalPages>noofpagenumbers){
		noofpages=noofpagenumbers
		addtext="..."
	}
	else{
		noofpages=totalPages
		addtext=""
	}
	for(i=0;i<noofpages;i++){
	pagenumberelement=	pagenumberelement+`<a href="#" class="page-link" data-page="${i+1}">${i+1}</a>`
	}
	pagenumberelement=pagenumberelement+addtext+`<a href="#" id="next">Next</a>`	
	pagination.innerHTML=pagenumberelement

}



// Function to display cards for a specific page 
function displayPage(page) { 
	const startIndex = (page - 1) * cardsPerPage; 
	const endIndex = startIndex + cardsPerPage; 
	cards.forEach((card, index) => { 
		if (index >= startIndex && index < endIndex) { 
			card.style.display = 'flex'; 
		} else { 
			card.style.display = 'none'; 
		} 
	}); 

} 

// Function to update pagination buttons and page numbers 
function updatePagination() { 
	pageNumbers.textContent = 
		`Page ${currentPage} of ${totalPages}`; 
	prevButton.disabled = currentPage === 1; 
	nextButton.disabled = currentPage === totalPages; 
	pageLinks.forEach((link) => { 
		const page = parseInt(link.getAttribute('data-page')); 
		link.classList.toggle('active', page === currentPage); 
	}); 
} 

// Event listener for "Previous" button 
prevButton.addEventListener('click', () => { 
	if (currentPage > 1) { 
		currentPage--; 
		displayPage(currentPage); 
		updatePagination(); 
	} 
}); 

// Event listener for "Next" button 
nextButton.addEventListener('click', () => { 
	if (currentPage < totalPages) { 
		currentPage++; 
		displayPage(currentPage); 
		updatePagination(); 
	} 
}); 

// Event listener for page number buttons 
pageLinks.forEach((link) => { 
	link.addEventListener('click', (e) => { 
		e.preventDefault(); 
		const page = parseInt(link.getAttribute('data-page')); 
		if (page !== currentPage) { 
			currentPage = page; 
			displayPage(currentPage); 
			updatePagination();
		} 
	}); 
}); 

// Initial page load 
displayPage(currentPage); 
updatePagination();
