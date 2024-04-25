import { router, usePage } from '@inertiajs/react';
import React, { useEffect, useState } from 'react'

const Delete = ({ student, message }) => {
    const [inputPassword, setInputPassword] = useState("");

    const handleDelete = (e) => {
        e.preventDefault()
        if (inputPassword) {
            router.delete(`/dashboard/student/delete/${student.id}`, { headers: { "password": inputPassword } })
        }
    }

    const btnBack = (e) => {
        e.preventDefault()
        router.get('/')
    }

    return (
        <div className='  flex justify-center items-center  h-[90vh] drop-shadow '>
            <div className=' w-[80vh] h-[39vh]  bg-white p-3 rounded-lg'>
                <div className='  font-bold  mx-3 my-1  flex justify-between '>
                    <span className='text-red-500'>Delete "{student.name}"</span>
                    <button
                        className=' border px-2 rounded-lg text-gray-500 drop-shadow-sm'
                        onClick={(e) => btnBack(e)}
                    >
                        esc
                    </button>
                </div>
                <hr />
                <div
                    className='pt-5'>
                    {/* To confirm, type "<span className='text-red-500'>{student.name}</span>" in the box below */}
                    To confirm, <strong>enter your password</strong> in the box below
                    <div className={`pt-3 ${message ? "" : "mb-2"}`}>
                        <input
                            type="password"
                            className='w-full  drop-shadow mt-1 rounded-xl'
                            style={{ backgroundColor: "#eff6ff", border: "1px solid rgb(252 165 165)" }}
                            onChange={(e) => setInputPassword(e.target.value)}
                        />
                        {message && <small className=' text-red-600'>* wrong password</small>}
                    </div>
                    <button
                        className={`w-full ${message ? "mt-1" : "mt-4"} border rounded-lg py-2  text-white fond-bold drop-shadow ${!inputPassword ? "bg-red-300" : "bg-red-500"}`} disabled={!inputPassword}
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
