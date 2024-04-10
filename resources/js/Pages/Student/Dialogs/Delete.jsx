import { btnClickToDelete } from '@/Dashboard_Components/Slices/componentSlice';
import { router } from '@inertiajs/react';
import React, { useState } from 'react'
import { useDispatch } from 'react-redux'

const Delete = ({ student }) => {
    const [inputName, setInputName] = useState("");
    const dispatch = useDispatch();

    const handleDelete = (e) => {
        e.preventDefault()

        if (student.name === inputName) {
            router.delete(`/dashboard/student/delete/${student.id}`)
            setInputName("")
            dispatch(btnClickToDelete(null))
        }
        else alert("Wrong name!")
    }

    return (
        <div className='  flex justify-center items-center  h-[50vh] drop-shadow '>
            <div className=' w-1/2 h-[35vh]  bg-white p-2 rounded-lg'>
                <div className='  font-bold  mx-3 my-1  flex justify-between '>
                    <span className='text-red-500'>Delete "{student.name}"</span>
                    <button
                        className=' border px-2 rounded-lg text-gray-500 drop-shadow-sm'
                        onClick={() => dispatch(btnClickToDelete(null))}
                    >
                        esc
                    </button>
                </div>
                <hr />
                <div
                    className='pt-5'>
                    To confirm, type "<span className='text-red-500'>{student.name}</span>" in the box below
                    <div className='pt-3'>
                        <input
                            type="text"
                            className='w-full  drop-shadow'
                            style={{ backgroundColor: "#eff6ff", border: "1px solid rgb(252 165 165)" }}
                            onChange={(e) => setInputName(e.target.value)}
                        />
                    </div>
                    <button
                        className={`w-full mt-5 border rounded-lg py-1  text-white fond-bold drop-shadow ${student.name !== inputName ? "bg-red-300" : "bg-red-500"}`} disabled={student.name !== inputName}
                        onClick={(e) => handleDelete(e)}
                    >
                        Delete this user
                    </button>
                </div>
            </div>

        </div>
    )
}

export default Delete
