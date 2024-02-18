import { useForm } from '@inertiajs/inertia-react';
import { router } from '@inertiajs/react';
import { InputBox } from './component/Input';
import { BtnBox } from './component/Btn';

const Test = () => {
    const submit = (e)=>{  
        let form = new FormData(e.target);
        e.preventDefault();
        router.post('/save', form);
    }

    return (
        <div className="flex justify-center py-10">
            <div className='py-8 border min-w-60 w-[90%] max-w-96 flex flex-col items-center gap-5 shadow-lg'>
                <h1 className="text-xl font-bold">Enregistrement</h1>
                <form action="" method="post" className='flex flex-col items-center gap-2 w-3/4' onSubmit={submit}>
                    <InputBox label="Name" type="text" name="name" id="name"/>
                    <InputBox label="Email" type="email" name="email" id="email"/>
                    <InputBox label="Password" type="password" name="password" id="password"/>
                    <InputBox label="Confirm password" type="password" name="password_confirmation" id="password_confirmation"/>
                    <BtnBox type="submit" value="Enregistrer" name="enregistrer" className="bg-teal-700 text-white font-bold w-full my-2 p-8 py-2"/>
                </form>
            </div>
        </div>
    )
}
export default Test