<template>
    <div class="w-full max-w-[800px] mx-auto pt-32 pb-10 space-y-16 px-4">
        <h1 class="text-gray-900 dark:text-white text-5xl text-center">Umowa sprzedaży</h1>
        
        
            <div class=" text-center w-full pb-8 ">
                <span class="text-gray-900 dark:text-white text-2xl text-center font-bold">Kupujący:</span>
            </div>
            <div class="mb-6">
                <span v-if="errors && errors.imie_nazwisko" class=" text-red-500 text-sm font-medium">{{errors.imie_nazwisko[0]}}</span>
                <label for="imie_nazwisko" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imię i Nazwisko</label>
                <input type="text" placeholder="Imię i Nazwisko" v-model="form.imie_nazwisko" name="imie_nazwisko" id="imie_nazwisko" class=" outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div>
             <div class="mb-6">
                <span v-if="errors && errors.email" class=" text-red-500 text-sm font-medium">{{errors.email[0]}}</span>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" placeholder="Email" v-model="form.email" name="email" id="email" class=" outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div>
             <!-- <div class="mb-6">
                <span v-if="errors && errors.telephone" class=" text-red-500 text-sm font-medium">{{errors.telephone[0]}}</span>
                <label for="telephone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="tel" placeholder="Number" name="telephone" id="telephone" class=" outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div> -->
            <div class="mb-6">
                 <span v-if="errors && errors.ulicanr" class=" text-red-500 text-sm font-medium">{{errors.ulicanr[0]}}</span>
                <label for="ulicanr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ulica, numer domu</label>
                <input type="text" placeholder="Ulica, numer domu" v-model="form.ulicanr" name="ulicanr" id="ulicanr" class=" outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div>
            <div class="mb-6">
                <span v-if="errors && errors.miasto" class=" text-red-500 text-sm font-medium">{{errors.miasto[0]}}</span>
                <label for="miasto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Miasto</label>
                <input type="text" placeholder="Miasto" name="miasto" v-model="form.miasto" id="miasto" class=" outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div>
            <div class="mb-6">
                <span v-if="errors && errors.kodpocztowy" class=" text-red-500 text-sm font-medium">{{errors.kodpocztowy[0]}}</span>
                <label for="kodpocztowy" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kod pocztowy</label>
                <input type="text" placeholder="Kod pocztowy" name="kodpocztowy" v-model="form.kodpocztowy" id="kodpocztowy" class=" outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div>
             <div class="mb-6">
                <span v-if="errors && errors.model" class=" text-red-500 text-sm font-medium">{{errors.model[0]}}</span>
                <label for="model" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Model i rozmiar</label>
                <input type="text" placeholder="Model i rozmiar" name="model" v-model="form.model" id="model" class=" outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div>
            <!-- <div class="mb-6">
                <span v-if="errors && errors.ilosc" class=" text-red-500 text-sm font-medium">{{errors.ilosc[0]}}</span>
                <label for="ilosc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ilość</label>
                <input type="text" placeholder="Ilość" name="ilosc" id="ilosc" v-model="form.ilosc" class=" outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div> -->
            <!-- <div class="mb-6">
                <span v-if="errors && errors.wprowadzanie" class=" text-red-500 text-sm font-medium">{{errors.wprowadzanie[0]}}</span>
                <label for="wprowadzanie" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cena za szt.</label>
                <input type="text" placeholder="Cena za szt." name="wprowadzanie" v-model="form.wprowadzanie" id="wprowadzanie" class=" outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div> -->
             <div class="mb-6">
                <span v-if="errors && errors.suma" class=" text-red-500 text-sm font-medium">{{errors.suma[0]}}</span>
                <label for="suma" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Suma (PLN)</label>
                <input type="number" placeholder="Suma (PLN)" name="suma" v-model="form.suma" id="suma" class=" outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div>
             <div class="mb-6">
                        <span v-if="errors && errors.sposob" class=" text-red-500 text-sm font-medium">{{errors.sposob[0]}}</span>
                        <select id="sposob" v-model="form.sposob" name="sposob" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Przelew</option>
                        <option>Gotówka</option>
                        <option>Pobranie</option>
                    </select>
             </div>
            <div class="mb-6">
                <span v-if="errors && errors.date" class=" text-red-500 text-sm font-medium">{{errors.date[0]}}</span>
                <input type="date" placeholder="date" v-model="form.date" name="date" id="date" class=" outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div>
            <div class=" w-full text-center">
                    <span class="text-lg font-medium text-gray-900 dark:text-white">Wprowadź podpis</span>
            </div>
             <div class="mb-6">
                 <span v-if="errors && errors.podpis" class=" text-red-500 text-sm font-medium">{{errors.podpis[0]}}</span>
                 <label for="suma" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Podpis:</label>
                <div class=" border dark:border-gray-50 border-gray-900 rounded-xl">
                <VueSignaturePad  ref="signaturePad"/>
             </div>
             </div>
          <div class=" py-2" v-if="show">
              <span class=" text-red-400 text-2xl font-semibold">Please fill in the required fields.</span>
          </div>
          <div class=" sm:space-x-4 flex sm:flex-row flex-col space-y-4 sm:space-y-0 ">
           
            <button @click="Save"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Potwierdź</button>
            <button @click="clear" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5  w-full sm:w-auto py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Wyczyść</button>

          </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
    const signaturePad = ref(null)
    const form = ref({
        imie_nazwisko:'',
        email:'',
        ulicanr:'',
        miasto:'',
        kodpocztowy:'',
        model:'',
      //  ilosc:'',
      //  wprowadzanie:'',
        suma:'',
        sposob:'',
        date:'',
        podpis:''
    })
   const show = ref(false)
   const errors = ref([])

    const Save = () => {
        clear();
      const { isEmpty, data } = signaturePad.value.saveSignature();
      form.value.podpis = data;
    console.log(data)
      axios.post('/save-data',form.value).then((resposne) => {
         console.log(resposne)
         axios.get(resposne.data.pdf, { responseType: 'blob' })
            .then(response => {
                // Create a Blob object with the PDF data
                const blob = new Blob([response.data], { type: 'application/pdf' });

                // Create a URL for the Blob
                const url = window.URL.createObjectURL(blob);

                // Create an anchor element to trigger the download
                const a = document.createElement('a');
                a.style.display = 'none';
                a.href = url;

                // Set the filename for the downloaded PDF
                a.download = 'pdfname.pdf';

                // Trigger a click event to initiate the download
                document.body.appendChild(a);
                a.click();

                // Clean up resources
                window.URL.revokeObjectURL(url);
                document.body.removeChild(a);
            })
            .catch(error => {
                console.error('Error downloading PDF:', error);
            });
      }).catch((error) => {
        console.log(error.response.data.errors)
        errors.value = error.response.data.errors
        show.value = true
      })
    }


    const clear = () => {
        show.value = false
        form.value = {
            imie_nazwisko:'',
            email:'',
            ulicanr:'',
            miasto:'',
            kodpocztowy:'',
            model:'',
            suma:'',
            sposob:'',
            date:'',
            podpis:''
        } 
      signaturePad.value.clearSignature()
      errors.value = [];
    }
</script>
