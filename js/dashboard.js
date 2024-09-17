 function updateAndStoreText() {
        // Get the value from the input box
        const inputText = document.getElementById('textInput').value;

        // Get the paragraph element
        const paragraph = document.getElementById('myParagraph');

        // Update the paragraph text with the input box value
        paragraph.textContent = inputText;

        // Store the updated text in local storage
        localStorage.setItem('updatedText', inputText);

        // Redirect to the display page
       // window.location.href = 'test3.html';
    }
