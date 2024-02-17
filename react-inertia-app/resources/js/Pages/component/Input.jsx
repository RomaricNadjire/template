/**
 * 
 * @param {string} value 
 * @param {string} type
 * @param {string} name
 * @returns {HTMLElement}
 */
export function InputBox({label , type, name, id}){
    return (<div className='flex flex-col w-full gap-1'>
                <label htmlFor={id} className="text-sm">{label}</label>
                <input type={type} name={name} className='border-2 p-1 px-2 outline-none' id={id}/>
            </div>)
}