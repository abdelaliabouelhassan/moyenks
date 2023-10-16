<template>
    <div  class="w-full max-w-[800px] mx-auto pt-10 md:pt-32 pb-10 space-y-16 px-4">
        <h1 class="text-gray-900 dark:text-white text-2xl md:text-5xl text-center">Umowa sprzedaży</h1>
        
        
            <div class=" text-center w-full pb-8 ">
                <span class="text-gray-900 dark:text-white text-2xl text-center font-bold">Kupujący:</span>
            </div>
            <div class="mb-6">
                <span v-if="formErrors.imie_nazwisko" class=" text-red-500 text-sm font-medium">{{formErrors.imie_nazwisko}}</span>
                <label for="imie_nazwisko" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imię i Nazwisko</label>
                <input type="text" placeholder="Imię i Nazwisko" v-model="form.imie_nazwisko" name="imie_nazwisko" id="imie_nazwisko" class=" outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div>
             <div class="mb-6">
                <span v-if="formErrors.email" class=" text-red-500 text-sm font-medium">{{formErrors.email}}</span>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" placeholder="Email" v-model="form.email" name="email" id="email" class=" outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div>
             <!-- <div class="mb-6">
                <span v-if="errors && errors.telephone" class=" text-red-500 text-sm font-medium">{{errors.telephone[0]}}</span>
                <label for="telephone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="tel" placeholder="Number" name="telephone" id="telephone" class=" outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div> -->
            <div class="mb-6">
                 <span v-if="formErrors.ulicanr" class=" text-red-500 text-sm font-medium">{{formErrors.ulicanr}}</span>
                <label for="ulicanr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ulica, numer domu</label>
                <input type="text" placeholder="Ulica, numer domu" v-model="form.ulicanr" name="ulicanr" id="ulicanr" class=" outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div>
            <div class="mb-6">
                <span v-if="formErrors.miasto" class=" text-red-500 text-sm font-medium">{{formErrors.miasto}}</span>
                <label for="miasto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Miasto</label>
                <input type="text" placeholder="Miasto" name="miasto" v-model="form.miasto" id="miasto" class=" outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div>
            <div class="mb-6">
                <span v-if="formErrors.kodpocztowy" class=" text-red-500 text-sm font-medium">{{formErrors.kodpocztowy}}</span>
                <label for="kodpocztowy" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kod pocztowy</label>
                <input type="text" placeholder="Kod pocztowy" name="kodpocztowy" v-model="form.kodpocztowy" id="kodpocztowy" class=" outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div>
             <div class="mb-6">
                <span v-if="formErrors.model" class=" text-red-500 text-sm font-medium">{{formErrors.model}}</span>
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
                <span v-if="formErrors.suma" class=" text-red-500 text-sm font-medium">{{formErrors.suma}}</span>
                <label for="suma" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Suma (PLN)</label>
                <input type="number" placeholder="Suma (PLN)" name="suma" v-model="form.suma" id="suma" class=" outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div>
             <div class="mb-6">
                        <span v-if="formErrors.sposob" class=" text-red-500 text-sm font-medium">{{formErrors.sposob}}</span>
                        <label for="suma" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">metoda płatności </label>
                        <select id="sposob" v-model="form.sposob" name="sposob" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Przelew</option>
                        <option>Gotówka</option>
                        <option>Pobranie</option>
                    </select>
             </div>
            <div class="mb-6">
                <span v-if="formErrors.date" class=" text-red-500 text-sm font-medium">{{formErrors.date}}</span>
                <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">data</label>
                <input type="date" placeholder="date" v-model="form.date" name="date" id="date" class=" outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div>
            <div class=" w-full text-center">
                    <span class="text-lg font-medium text-gray-900 dark:text-white">Wprowadź podpis</span>
            </div>
             <div class="mb-6">
                 <span v-if="formErrors.podpis" class=" text-red-500 text-sm font-medium">{{formErrors.podpis}}</span>
                 <label for="suma" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Podpis:</label>
                <div class=" border bg-white border-gray-900  h-72 rounded-xl">
                <VueSignaturePad  ref="signaturePad" />
             </div>
             </div>
          <div class=" py-2" v-if="show">
              <span class=" text-red-400 text-2xl font-semibold">Please fill in the required fields.</span>
          </div>
          <div class=" sm:space-x-4 flex sm:flex-row flex-col space-y-4 sm:space-y-0 ">
           
            <button @click="Save"  class="text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <div role="status" v-if="loading">
                <svg aria-hidden="true" class="w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                </svg>
                <span class="sr-only">Loading...</span>
            </div>
            <span v-else>Potwierdź</span>
                </button>
            <button @click="clear" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5  w-full sm:w-auto py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Wyczyść</button>

          </div>


    

   
    </div>
    <div >
        <Pdf :data="form" ref="pdfRef" @clear="clear" />
    </div>
</template>

<script setup>
import Pdf from './pdf.vue'
const pdfRef = ref(null)
import { computed, ref } from "vue";
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
    const loading = ref(false);
   const show = ref(false)
   const errors = ref([])
 
   const formErrors = ref({
        imie_nazwisko: '',
        email: '',
        ulicanr: '',
        miasto: '',
        kodpocztowy: '',
        model: '',
        suma: '',
        sposob: '',
        date: '',
        podpis: ''
        });

const isFormValid = computed(() => {
  // Check if there are any error messages in the formErrors object
  return Object.values(formErrors.value).every(error => !error);
});

const validateRequiredFields = () => {
  // Define an array of field names that are required
  const requiredFields = ['imie_nazwisko', 'email', 'ulicanr', 'miasto', 'kodpocztowy', 'model', 'suma', 'sposob', 'date', 'podpis'];

  // Loop through the required fields and check if they are empty
  requiredFields.forEach(fieldName => {
    if (!form.value[fieldName]) {
      formErrors.value[fieldName] = 'Wypetnij to pole';
    } else {
      formErrors.value[fieldName] = '';
    }
  });
}

 const Save = () => {

   
    show.value = false;
    const { isEmpty, data } = signaturePad.value.saveSignature();
    if(!isEmpty) form.value.podpis = data;
     validateRequiredFields();
    if(!isFormValid.value) return
    if(loading.value) return;
    loading.value = true;
    pdfRef.value.exportToPDF();
   
      // axios.post('/save-data',form.value).then((resposne) => {
      //   console.log(resposne)
      //    pdfRef.value.exportToPDF();
      //   loading.value = false
      //   //clear();
      // }).catch((error) => {
      //   console.log(error.response.data.errors)
      //   errors.value = error.response.data.errors
      //   show.value = true
      //   loading.value = false
      // })
    }

    const clearErrors = () => {
        errors.value = [];
    }

    const clear = () => {
        loading.value = false
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
