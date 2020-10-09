<div class = "fixed z-10 inset-0 overflow-y-auto eas-out duration-400">
    class = "fixed z-10 insert-0 overflow-y-auto eas-out duration-400" >
       <div class = "flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm: block sm: p-0">
   <div class = "flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm: block sm: p-0" >
           <div class = "fixed inset-0 transition-opacity">
   <div class = "fixed inset-0 transition-opacity" >
               <div class = "absolu inset-0 bg-gray-500 opacity-75"> </div>
   <div class = "absolu inset-0 bg-gray-500 opacity-75" > </div>
           </div>
   </div>
           <! - Cet élément a pour but d'amener le navigateur à centrer le contenu modal. ->
   <! - Cet élément a pour but d'amener le navigateur à centrer le contenu modal. ->
           <span class = "hidden sm: inline-block sm: align-middle sm: h-screen"> </span>?
   <span class = "hidden sm: inline-block sm: align-middle sm: h-screen" > </span> ?
            <div class = "inline-block align-bottom bg-white circular-lg text-left overflow-hidden shadow-xl transform transition-all sm: my-8 sm: align-middle sm: max-w-lg sm: w -full "role =" dialog "aria-modal =" true "aria-labelledby =" modal-headline ">
   <div class = "inline-block align-bottom bg-white circular-lg text-left overflow-hidden shadow-xl transform transition-all sm: my-8 sm: align-middle sm: max-w-lg sm: w -full " role = " dialog " aria-modal = " true " aria-labelledby = " modal-headline " >
               <form>
   <form>
                   <div class = "bg-white px-4 pt-5 pb-4 sm: p-6 sm: pb-4">
   <div class = "bg-white px-4 pt-5 pb-4 sm: p-6 sm: pb-4" >
                       <div class = "">
   <div class = "" >
                           <div class = "mb-4">
   <div class = "mb-4" >
                               <label for = "exampleFormControlInput1" class = "block text-gray-700 text-sm font-bold mb-2"> Titre: </label>
   <label for = "exampleFormControlInput1" class = "block text-gray-700 text-sm font-bold mb-2" > Titre: </label>
                               <input type = "text" class = "shadow aspect-none border arrondi w-full py-2 px-3 text-gray-700 lead-tight focus: outline-none focus: shadow-outline" id = "exampleFormControlInput1" placeholder = "Entrez le titre" wire: model = "title">
   <input type = "text" class = "shadow aspect-none border arrondi w-full py-2 px-3 text-gray-700 lead-tight focus: outline-none focus: shadow-outline" id = "exampleFormControlInput1" placeholder = "Entrez le titre" wire: model = "title" >
                               @error ('title') <span class = "text-red-500"> {{$ message}} </span> @enderror
   <span class = "text-red-500" > {{$ message}} </span> @enderror
                            </div>
   </div>
                           <div class = "mb-4">
   <div class = "mb-4" >
                               <label for = "exampleFormControlInput2" class = "block text-gray-700 text-sm font-bold mb-2"> Corps: </label>
   <label for = "exampleFormControlInput2" class = "block text-gray-700 text-sm font-bold mb-2" > Corps: </label>
                               <textarea class = "ombre aspect-aucune bordure arrondie w-complet py-2 px-3 text-gray-700 mise au point de premier plan: contour-aucun focus: shadow-contour" id = "exampleFormControlInput2" wire: model = "body "placeholder =" Enter Body "> </textarea>
   <textarea class = "ombre aspect-aucune bordure arrondie w-complet py-2 px-3 text-gray-700 mise au point de premier plan: contour-aucun focus: shadow-contour" id = "exampleFormControlInput2" wire: model = "body " placeholder = " Enter Body " > </textarea>
                               @error ('body') <span class = "text-red-500"> {{$ message}} </span> @enderror
   <span class = "text-red-500" > {{$ message}} </span> @enderror
                            </div>
   </div>
                       </div>
   </div>
                   </div>
   </div>
                   <div class = "bg-gray-50 px-4 py-3 sm: px-6 sm: flex sm: flex-row-reverse">
   <div class = "bg-gray-50 px-4 py-3 sm: px-6 sm: flex sm: flex-row-reverse" >
                       <span class = "flex w-full round-md shadow-sm sm: ml-3 sm: w-auto">
   <span class = "flex w-full round-md shadow-sm sm: ml-3 sm: w-auto" >
                           <button wire: click.prevent = "store ()" type = "button" class = "inline-flex justify-center w-full round-md border border-transparent px-4 py-2 bg-green-600 text- base lead-6 font-medium text-white shadow-sm hover: bg-green-500 focus: contour-none focus: border-green-700 focus: shadow-outline-green transition easy-in-out duration-150 sm: text-sm sm: leader-5 ">
   <bouton fil: cliquez . prevent = "store ()" type = "button" class = "inline-flex justify-center w-full round-md border border-transparent px-4 py-2 bg-green-600 text-base Leading-6 font- medium text-white shadow-sm hover: bg-green-500 focus: contour-none focus: border-green-700 focus: shadow-outline-green transition easy-in-out duration-150 sm: text-sm sm: Leading -5 " >
                           sauvegarder
                           </button>
   </button>
                       </span>
   </span>
                       <span class = "mt-3 flex w-full round-md shadow-sm sm: mt-0 sm: w-auto">
   <span class = "mt-3 flex w-full round-md shadow-sm sm: mt-0 sm: w-auto" >
                           <button wire: click = "closeModal ()" type = "button" class = "inline-flex justify-center w-full-round-md border border-gray-300 px-4 py-2 bg-white text-base Leading -6 font-medium text-gray-700 shadow-sm hover: text-gray-500 focus: contour-none focus: border-blue-300 focus: shadow-outline-blue transition easy-in-out duration-150 sm: text-sm sm: leader-5 ">
                               Annuler
                           </button>
                       </span>
                   </div>
               </form>
           </div>
       </div>
   </div>
