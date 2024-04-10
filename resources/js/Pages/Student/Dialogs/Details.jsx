import { useState } from 'react'
import { router } from "@inertiajs/react"
import DialogsLayout from '@/Dashboard_Layouts/DialogsLayout'
import { useDispatch } from 'react-redux'
import { btnClickToDetail } from '@/Dashboard_Components/Slices/componentSlice'


const Details = ({ student }) => {
    const dispatch = useDispatch();

    const [name, setName] = useState(student.name)
    const [nickName, setNickName] = useState(student.nickName)
    const [email, setEmail] = useState(student.email)
    const [phone, setPhone] = useState(student.phone)
    const [board, setBoard] = useState(student.board)
    const [level, setLevel] = useState(student.level)
    const [star, setStar] = useState(student.point)
    const [status, setStatus] = useState(student.status)
    const [age, setAge] = useState(student.age)
    const [isSubscriber, setIsSubscriber] = useState(student.isSubscriber)

    const formData = {
        id: student.id,
        name,
        nickName,
        email,
        phone,
        board,
        level,
        point: star,
        isAuth: status,
        age,
        isSubscriber
    }

    const handleSubmit = (e) => {
        e.preventDefault()

        try {
            router.post('/dashboard/student/update', formData);

            dispatch(btnClickToDetail(null))
            console.log('Form submitted successfully');
        } catch (err) {
            console.error('Error submitting form:', err.message);
        }
    };


    return (
        <>
            <DialogsLayout>
                <div className='rounded-sm border-solid border-2  bg-white'>
                    <div className=' m-1 p-2 ' style={{ backgroundColor: "#eff6ff" }}>
                        <h1 className=' font-bold'>Details</h1>
                        {/* <hr /> */}
                    </div>
                    <div className=' flex items-center mx-4'>
                        <table className='w-full'>

                            <tbody class=" text-left ">
                                <tr className='h-10' >
                                    <th className='px-3'>Name</th>
                                    <td>:</td>
                                    <td className='px-3'>{student.name}</td>
                                </tr>
                                <tr className='h-10'>
                                    <th className='px-3'>Nickname</th>
                                    <td>:</td>
                                    <td className='px-3'>{student.nickName ? student.nickName : "-"}</td>
                                </tr>
                                <tr className='h-10'>
                                    <th className='px-3'>Email</th>
                                    <td>:</td>
                                    <td className='px-3'>{student.email ? student.email : "-"}</td>
                                </tr>

                                <tr className='h-10' >
                                    <th className='px-3'>Phone</th>
                                    <td>:</td>
                                    <td className='px-3'>{student.phone ? student.phone : "-"}</td>
                                </tr>

                                <tr className='h-10'>
                                    <th className='px-3'>Tier</th>
                                    <td>:</td>
                                    <td className='px-3'>{student.board}</td>
                                </tr>
                                <tr className='h-10'>
                                    <th className='px-3'>Level</th>
                                    <td>:</td>
                                    <td className='px-3'>{student.level}</td>
                                </tr>
                                <tr className='h-10'>
                                    <th className='px-3'>Stars</th>
                                    <td>:</td>
                                    <td className='px-3'>{student.point}</td>
                                </tr>
                                <tr className='h-10'>
                                    <th className='px-3'>Status</th>
                                    <td>:</td>
                                    <td className={`px-3 ${student.isAuth == 1 ? "text-emerald-400" : ""}`}>
                                        {student.isAuth == 1 ? "online" : "offline"}
                                    </td>
                                </tr>
                                <tr className='h-10'>
                                    <th className='px-3'>Age</th>
                                    <td>:</td>
                                    <td className='px-3'>{student.age}</td>
                                </tr>
                                <tr className="text-center" style={{ backgroundColor: "#eff6ff" }}>
                                    <td colspan="3">
                                        <p class="border rounded p-2 font-bold">
                                            {
                                                student.isSubscriber
                                                    ? "Subscribe User"
                                                    : "Free User"
                                            }
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div className=' rounded-sm border-solid border-2 overflow-y-scroll bg-white pb-2'>
                    <div className=' m-1 p-2 ' style={{ backgroundColor: "#eff6ff" }}>
                        <h1 className=' font-bold'>Edit</h1>
                    </div>
                    <div className=' flex items-center mx-4'>
                        <table className='w-full'>

                            <tbody class=" text-left ">
                                <tr className='h-12' >
                                    <th className='px-3'>Name</th>
                                    <td>:</td>
                                    <input
                                        type="text"
                                        className=' w-full '
                                        style={{ border: "1px solid #eff6ff" }}
                                        placeholder={student.name}
                                        onChange={(e) => setName(e.target.value)}
                                    />
                                </tr>
                                <tr className='h-12'>
                                    <th className='px-3'>Nickname</th>
                                    <td>:</td>
                                    <input
                                        type="text"
                                        className=' w-full '
                                        style={{ border: "1px solid #eff6ff" }}
                                        placeholder={student.nickName ? student.nickName : "-"}
                                        onChange={(e) => setNickName(e.target.value)}
                                    />
                                </tr>
                                <tr className='h-12'>
                                    <th className='px-3'>Email</th>
                                    <td>:</td>
                                    <input
                                        type="text"
                                        className=' w-full '
                                        style={{ border: "1px solid #eff6ff" }}
                                        placeholder={student.email ? student.email : "-"}
                                        onChange={(e) => setEmail(e.target.value)}
                                    />
                                </tr>

                                <tr className='h-12' >
                                    <th className='px-3'>Phone</th>
                                    <td>:</td>
                                    <input
                                        type="text"
                                        className=' w-full '
                                        style={{ border: "1px solid #eff6ff" }}
                                        placeholder={student.phone ? student.phone : "-"}
                                        onChange={(e) => setPhone(e.target.value)}
                                    />
                                </tr>

                                <tr className='h-12'>
                                    <th className='px-3'>Tier</th>
                                    <td>:</td>
                                    <select className='w-full' style={{ border: "1px solid #eff6ff" }} defaultValue={student.board}>
                                        <option value="silver" onClick={() => setBoard("silver")} selected={student.board == "silver"}>Silver</option>
                                        <option value="platinum" onClick={() => setBoard("platinum")} selected={student.board == "platinum"}>Platinum</option>
                                        <option value="gold" onClick={() => setBoard("gold")} selected={student.board == "gold"}>Gold</option>
                                        <option value="diamond" onClick={() => setBoard("diamond")} selected={student.board == "diamond"}>Diamond</option>
                                    </select>
                                </tr>
                                <tr className='h-12'>
                                    <th className='px-3'>Level</th>
                                    <td>:</td>
                                    <input
                                        type="text"
                                        className=' w-full '
                                        style={{ border: "1px solid #eff6ff" }}
                                        placeholder={student.level}
                                        onChange={(e) => setLevel(e.target.value)}
                                    />
                                </tr>
                                <tr className='h-12'>
                                    <th className='px-3'>Stars</th>
                                    <td>:</td>
                                    <input
                                        type="text"
                                        className=' w-full '
                                        style={{ border: "1px solid #eff6ff" }}
                                        placeholder={student.point}
                                        onChange={(e) => setStar(e.target.value)}
                                    />
                                </tr>
                                {/* <tr className='h-12'>
                                    <th className='px-3'>Status</th>
                                    <td>:</td>
                                    <select className='w-full'
                                        style={{ border: "1px solid #eff6ff" }}
                                        disabled={student.isAuth == 0}
                                        defaultValue={student.isAuth}
                                    >
                                        <option value="1" onClick={() => setStatus("1")} selected={student.isAuth == 1}>online</option>
                                        <option value="0" onClick={() => setStatus("0")} selected={student.isAuth == 0}>offline</option>
                                    </select>
                                </tr> */}
                                <tr className='h-12'>
                                    <th className='px-3'>Age</th>
                                    <td>:</td>
                                    <input
                                        type="text"
                                        className=' w-full '
                                        style={{ border: "1px solid #eff6ff" }}
                                        placeholder={student.age}
                                        onChange={(e) => setAge(e.target.value)}
                                    />
                                </tr>
                                <tr className="text-center" style={{ backgroundColor: "#eff6ff" }}>
                                    <td colspan="3">
                                        <select className='w-full text-center'
                                            defaultValue={student.isSubscriber}
                                            style={{ backgroundColor: "#eff6ff", border: "1px solid #eff6ff" }}
                                        >
                                            <option value="1" onClick={() => setIsSubscriber(1)} selected={student.isSubscriber}>Subscribe User</option>
                                            <option value="0" onClick={() => setIsSubscriber(0)} selected={!student.isSubscriber}>Free User</option>
                                        </select>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </DialogsLayout >
            <div className=' mt-3 flex justify-end '>
                <button
                    className='border rounded-md px-6 py-2 hover:bg-teal-100 mr-5 font-bold drop-shadow'
                    style={{ backgroundColor: "#eff6ff", }}
                    onClick={() => dispatch(btnClickToDetail(null))}
                >
                    Back
                </button>
                <button
                    className='border rounded-md px-5 py-2 bg-red-600 hover:bg-red-700 text-white drop-shadow'
                    onClick={(e) => handleSubmit(e)}
                >
                    Save & Back
                </button>
            </div>
        </>

    )
}


export default Details
