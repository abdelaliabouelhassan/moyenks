<template>
<div class="  hidden  ">
<div  ref="document" id="element-to-convert" style=" margin-top: 60px; padding-bottom:300px;
  text-align: center;">

    <div class=" w-full flex">
        <img  class=" mx-auto" src="/assets/images/logo.jpeg" alt="">
    </div>

    <br>
     <br>
      <br>

    Ja niżej podpisany/a  {{data.imie_nazwisko}}.
     <br>  <br>

     Zamieszkały/a w {{ data.miasto}}, {{data.ulicanr}}, {{data.kodpocztowy}}.
     <br>  <br>
     
   
       Oświadczam, że w dniu 	{{data.date}} sprzedałem/am firmie „Anna Staniec” Nip:  8792744469 Skąpe <br>  29 87-140 Chełmża .
   
     <br>
     <br>
     Nastepujące towary: <br> 
     {{data.model}}.
     
     
     
     <br>  <br>
     
     Zapłacono mi kwotę  : <br>
     {{data.suma}} <br>  <br>
     
     Sposób płatności: <br>
     {{data.sposob}}

     <br>
     <br>
     <div class=" w-full text-start pl-20 ">
        Podpis
     </div>
     <div class=" w-full flex">
        <img  class=" mx-auto w-96 "  :src="data.podpis" alt="">
    </div>
    <br>
     <div class=" w-full flex">
        <img  class=" mx-auto" src="/assets/images/text.jpeg" alt="">
    </div>
  </div>
</div>

</template>


<script setup>
    import html2pdf from "html2pdf.js";
   const props = defineProps(['data'])
   const emit = defineEmits(['clear'])
const exportToPDF = async () => {

   try {
  
    // Now that the PDF is uploaded, initiate the download
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    var element = document.getElementById('element-to-convert');
    var opt = {
        image:        { type: 'jpeg', quality: 0.98 },
    };
    const pdfAsString = await html2pdf().from(element).set(opt).toPdf().output('datauristring');
    const arr = pdfAsString.split(',');
    const pdfData = arr[1];

    const formData = new FormData()
    formData.append("data", pdfData);
        const response = await fetch("/upload-pdf", {
            method: "POST",
            body: formData,
            headers: {
                'X-CSRF-TOKEN': csrfToken, // Include the CSRF token in the headers
            },
        });

        if (response.ok) {
            const data = await response.json();
            html2pdf(document.getElementById("element-to-convert"), {
            margin: 1,
            filename: "data.pdf",
          });
           emit('clear');
        } else {
            console.error("Server returned an error.");
        }

   
  

   

   

   
  } catch (error) {
    console.error(error);
  }


      //upload data first
       

      // var opt = {
      //   image:        { type: 'jpeg', quality: 0.98 },
      // };

      //   html2pdf().from(element).set(opt).toPdf().output('datauristring').then(async function (pdfAsString) {
      //     // The PDF has been converted to a Data URI string and passed to this function.
      //     // Use pdfAsString however you like (send as email, etc)!

      //   var arr = pdfAsString.split(',');
      //   pdfAsString= arr[1];    

      //   var data = new FormData();
      //    data.append("data" , pdfAsString);
      //   await  axios.post("/upload-pdf", data).then((response) => {
      //      console.log(response)
      //      //download
      //        html2pdf(document.getElementById("element-to-convert"), {
      //         margin: 1,
      //         filename: "data.pdf",
      //       });
      //       emit('clear')
      //    }).catch((error) => {
      //      console.log(error)
      //    })
        

      //   })

      
    }


    defineExpose({
        exportToPDF
    })
</script>