import React from 'react'
import { useDispatch } from 'react-redux'
import { setUpdateAlert } from './Slices/componentSlice';
import { motion } from "framer-motion"

const Alert = ({ alertType, children }) => {
    const dispatch = useDispatch();

    return (
        <motion.div
            className='absolute w-[80%] flex justify-end mt-5 '
            initial={{ transform: "translateY(-100%)" }}
            animate={{ transform: "translateY(0%)" }}
            exit={{ transform: "translateY(-100%)" }}

        >
            <div className={`w-2/5 flex justify-between px-3 border rounded-lg py-2 ${alertType == "update" ? "bg-green-200" : "bg-red-300"}`}>
                <div className=' font-bold'>
                    {children}
                </div>
                <button onClick={() => dispatch(setUpdateAlert())}><i class="fa-solid fa-xmark"></i></button>
            </div>
        </motion.div>
    )
}

export default Alert
