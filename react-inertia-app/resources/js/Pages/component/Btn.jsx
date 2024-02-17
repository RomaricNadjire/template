/**
 * 
 * @param {string} value 
 * @param {string} type
 * @param {string} name
 * @returns {HTMLElement}
 */
export function BtnBox({value , type, name}){
    return (<input type={type} value={value} name={name} className="bg-teal-700 text-white font-bold w-full my-2 p-8 py-2"/>)
}